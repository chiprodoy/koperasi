<?php

namespace App\Http\Controllers;

use App\Models\HasilPanen;
use App\Models\Simkop\Anggota;
use Illuminate\Http\Request;

class AdminHasilPanenController extends BackendController
{

    public $modelRecords=HasilPanen::class;
    public $indexURL='admin-hasil-panen.index';
    public $editURL='admin-hasil-panen.edit';
    public $deleteURL='admin-hasil-panen.destroy';
    public $createURL='admin-hasil-panen.create';
    public $storeURL='admin-hasil-panen.store';
   // public $showURL='post.show';
    public $updateURL='admin-hasil-panen.update';
    public $titleOfCreatePage='Tambah Hasil Panen';
    public $titleOfShowPage='Detail Hasil Panen';
    public $titleOfEditPage='Edit Hasil Panen';
    public $titleOfIndexPage='Hasil Panen';
    public $extData;
    public $modName='admin-hasil-panen';
    public $hasilPanen;
    public $anggotas;

    public function index()
    {
        $request = request();
        $this->anggotas = Anggota::orderBy('nama')->get();

        $query = HasilPanen::with('anggota');

        // Filter tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tgl_panen', [$request->start_date, $request->end_date]);
        }

        // Filter nama anggota
        if ($request->filled('anggota_id')) {
            $query->where('anggota_id', $request->anggota_id);
        }

        $this->hasilPanen = $query->orderBy('tgl_panen', 'desc')->paginate(10);

        return view('admin.admin-hasil-panen.crud.index', get_object_vars($this));
    }

    public function exportCsv(Request $request)
    {
        $query = HasilPanen::with('anggota');

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tgl_panen', [$request->start_date, $request->end_date]);
        }

        if ($request->filled('anggota_id')) {
            $query->where('anggota_id', $request->anggota_id);
        }

        $hasilPanen = $query->get();

        $filename = "hasil_panen_" . date('Y-m-d_H-i-s') . ".csv";

        // Buka output buffer
        $handle = fopen('php://output', 'w');

        // Tambahkan BOM supaya Excel tidak rusak karakter
        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));

        // Header kolom
        fputcsv($handle, [
            'Nama Anggota',
            'Tanggal Panen',
            'Jumlah Panen (Kg)',
            'Luas Lahan (Ha)',
            'Harga per Kg'
        ], ';'); // delimiter pakai titik koma (;)

        // Isi data
        foreach ($hasilPanen as $row) {
            fputcsv($handle, [
                $row->anggota->nama,
                $row->tgl_panen,
                number_format($row->jumlah_hasil_panen, 2, ',', '.'),
                number_format($row->luas_lahan, 2, ',', '.'),
                number_format($row->harga_per_kg, 0, ',', '.')
            ], ';'); // delimiter pakai titik koma (;)
        }

        fclose($handle);

        // Response header untuk download
        return response()->streamDownload(function () use ($handle) {}, $filename, [
            "Content-Type" => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=\"$filename\"",
        ]);
    }

  /*  public function exportPdf(Request $request)
    {
        $query = HasilPanen::with('anggota');

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tgl_panen', [$request->start_date, $request->end_date]);
        }

        $hasilPanen = $query->get();

        $pdf = Pdf::loadView('hasil_panen.pdf', compact('hasilPanen'))->setPaper('a4', 'landscape');
        return $pdf->download('hasil_panen.pdf');
    }
  */
}
