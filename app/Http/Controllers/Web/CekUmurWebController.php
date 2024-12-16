<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CekUmur\StoreCheckUmurRequest;
use App\Http\Requests\CekUmur\UpdateCheckUmurRequest;
use App\Models\CekUmur;
use App\Models\JenisSyarat;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;

class CekUmurWebController extends Controller
{
    use PageMenu;

    public function __construct()
    {
        $this->menuModel = \App\Models\Menu::class;
        $this->getBackEndMenu();
        $this->BREADCRUMB_ITEM = [
            new Page('Home', route('dashboard'))
        ];

        //$this->modName=$this->modelRecords;

    }
    public function index()
    {
        $cekumur = CekUmur::get();
        $jenisSyarat = JenisSyarat::get();
        return view('admin.cekumur.cekumur', array_merge(compact('cekumur', 'jenisSyarat'), get_object_vars($this)));
    }
    public function edit(CekUmur $cekumur)
    {
        return view('update', array_merge(compact('cekumur', 'jenisSyarat'), get_object_vars($this)));
    }
    public function store(StoreCheckUmurRequest $request)
    {
        $cekumur = CekUmur::create([
            'title' => $request->title,
            'jenis_syarat_id' => $request->jenis_syarat_id,
            'min_tahun' => $request->min_tahun,
            'max_tahun' => $request->max_tahun,
            'min_bulan' => $request->min_bulan,
            'max_bulan' => $request->max_bulan,
            'min_tanggal' => $request->min_tanggal,
            'max_tanggal' => $request->max_tanggal,
            'tahun_sekarang' => $request->tahun_sekarang,
            'bulan_sekarang' => $request->bulan_sekarang,
            'tanggal_sekarang' => $request->tanggal_sekarang,
        ]);
        return back()->with('success', 'Data CekUmur Berhasil Ditambahkan');
    }
    public function update(UpdateCheckUmurRequest $request, CekUmur $cekumur)
    {
        $cekumur->update([
            'title' => $request->title,
            'jenis_syarat_id' => $request->jenis_syarat_id,
            'min_tahun' => $request->min_tahun,
            'max_tahun' => $request->max_tahun,
            'min_bulan' => $request->min_bulan,
            'max_bulan' => $request->max_bulan,
            'min_tanggal' => $request->min_tanggal,
            'max_tanggal' => $request->max_tanggal,
            'tahun_sekarang' => $request->tahun_sekarang,
            'bulan_sekarang' => $request->bulan_sekarang,
            'tanggal_sekarang' => $request->tanggal_sekarang,
        ]);
        return redirect()
            ->route('cekumur.index')
            ->with('success', 'Data CekUmur Berhasil Diubah');
    }

    public function destroy(CekUmur $cekumur)
    {
        $cekumur->delete();
        return back()->with('success', 'Data CekUmur Berhasil Dihapus');
    }
}
