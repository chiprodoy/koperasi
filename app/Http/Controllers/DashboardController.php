<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends BackendController
{
    public $dataChartHasilPanen;
    public $dataChartHargaSawit;

    public function index(){
        $this->dataChartHasilPanen = $this->chart_panen(request());
        $this->dataChartHargaSawit = $this->chart_harga_sawit(request());

        return view('admin.dashboard',get_object_vars($this));
    }

    private function chart_panen(Request $request)
    {
        $query = DB::table('hasil_panens')
            ->select('tgl_panen', DB::raw('SUM(jumlah_hasil_panen) as total_panen'))
            ->groupBy('tgl_panen')
            ->orderBy('tgl_panen', 'asc');

        // Filter range tanggal kalau ada
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tgl_panen', [$request->start_date, $request->end_date]);
        }

        $data = $query->get();

        $labels = $data->pluck('tgl_panen');
        $totals = $data->pluck('total_panen');

        return compact('labels', 'totals');
    }

    public function chart_harga_sawit(Request $request)
    {
        $query = DB::table('harga_sawits')
            ->select('tgl_update_harga', 'sumber', 'harga')
            ->orderBy('tgl_update_harga', 'asc');

        // Filter range tanggal jika diinputkan
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tgl_update_harga', [$request->start_date, $request->end_date]);
        }

        $rows = $query->get();

        // Ambil semua tanggal unik
        $dates = $rows->pluck('tgl_update_harga')->unique()->values();

        // Kelompokkan harga berdasarkan sumber
        $data = [];
        foreach ($rows as $row) {
            $data[$row->sumber][$row->tgl_update_harga] = $row->harga;
        }

        // Warna untuk tiap sumber
        $colors = ['#FF5733', '#33FF57', '#3357FF', '#F39C12', '#8E44AD', '#16A085'];
        $datasets = [];
        $i = 0;

        foreach ($data as $sumber => $values) {
            $datasets[] = [
                'label' => $sumber,
                'data' => array_map(function($tgl) use ($values) {
                    return $values[$tgl] ?? null;
                }, $dates->toArray()),
                'borderColor' => $colors[$i % count($colors)],
                'backgroundColor' => $colors[$i % count($colors)],
                'fill' => false,
                'tension' => 0.3
            ];
            $i++;
        }

        return compact('dates','datasets');
    }
    //
}
