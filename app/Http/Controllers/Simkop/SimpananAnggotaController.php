<?php

namespace App\Http\Controllers\Simkop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController;
use App\Http\Requests\Simkop\SimpananAnggotaStoreRequest;
use App\Models\Simkop\Anggota;
use App\Models\Simkop\JenisSimpanan;
use App\Models\Simkop\SimpananAnggota;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class SimpananAnggotaController extends BackendController
{
    public $modelRecords=SimpananAnggota::class;
    public $indexURL='admin-simpanan-anggota.index';
    public $editURL='admin-simpanan-anggota.edit';
    public $deleteURL='admin-simpanan-anggota.destroy';
    public $createURL='admin-simpanan-anggota.create';
    public $storeURL='admin-simpanan-anggota.store';
   // public $showURL='post.show';
    public $updateURL='admin-simpanan-anggota.update';
    public $titleOfCreatePage='Tambah Anggota';
    public $titleOfShowPage='Detail Anggota';
    public $titleOfEditPage='Edit Anggota';
    public $titleOfIndexPage='Anggota';
    public $extData;
    public $modName='admin-simpanan-koperasi';
    public $anggota;
    public $dataJenisSimpanan;
    public $dataSimpanan;

    public function browse(Request $request)
    {
        $this->anggota = Anggota::where('uuid',$request->id)->firstOrFail();
        $query = $this->anggota->simpananAnggota()->with('jenisSimpanan');

        if ($request->filled('from')) {
            $query->whereRaw("DATE(tgl_simpanan) >= '".$request->from."'");
        }

        if ($request->filled('to')) {
            $query->whereRaw('tgl_simpanan', '<=', $request->to);
        }

        if ($request->filled('filter_jenis_simpanan_id')) {
            $query->where('jenis_simpanan_id', $request->filter_jenis_simpanan_id);
        }

        $this->dataSimpanan = $query->orderBy('tgl_simpanan', 'desc')->get();
        $this->dataJenisSimpanan = JenisSimpanan::all();

        return view('admin.admin-simpanan-anggota.crud.index', get_object_vars($this));
    }

    /**
     *
     *
    */
    public function store(SimpananAnggotaStoreRequest $request){

        $data = $request->validated();
        $data['uuid']=null;
        $anggota = Anggota::findOrFail($data['anggota_id']);

        try
        {

            // dd($data);
            SimpananAnggota::create($data);
            return $this->output('success',$request,'Data Berhasil Disimpan',route($this->indexURL,['id'=>$anggota->uuid]));
        }
        catch(QueryException $e)
        {
            $this->errorMsg='Data Gagal Disimpan '.$e->getMessage();
            Log::error($e);

            if(env('APP_DEBUG')) return $this->output('error',$request,$e->getMessage(),route($this->indexURL,['id'=>$anggota->uuid]));
            else return $this->output('error',$request,'Data Gagal Disimpan',route($this->indexURL,['id'=>$anggota->uuid]));

        }

    }
}
