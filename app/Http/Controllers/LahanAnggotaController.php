<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BackendController;
use App\Http\Requests\LahanAnggotaStoreRequest;
use App\Http\Requests\Simkop\SimpananAnggotaStoreRequest;
use App\Models\LahanAnggota;
use App\Models\Simkop\Anggota;
use App\Models\Simkop\SimpananAnggota;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LahanAnggotaController extends BackendController
{
    public $modelRecords=LahanAnggota::class;
    public $indexURL='admin.lahan.anggota.index';
    public $editURL='admin.lahan.anggota.edit';
    public $deleteURL='admin.lahan.anggota.destroy';
    public $createURL='admin.lahan.anggota.create';
    public $storeURL='admin.lahan.anggota.store';
   // public $showURL='post.show';
    public $updateURL='admin-lahan-anggota.update';
    public $titleOfCreatePage='Tambah Anggota';
    public $titleOfShowPage='Detail Anggota';
    public $titleOfEditPage='Edit Anggota';
    public $titleOfIndexPage='Anggota';
    public $extData;
    public $modName='admin-lahan-anggota';
    public $anggota;
    public $dataLahan;

    public function browse(Request $request)
    {
        $query = LahanAnggota::query();


        if ($request->filled('keyword')) {
            $query->where('nomor_anggota',$request->keyword)->orWhereLike('nama',$request->keyword);
        }

        $this->dataLahan = $query->paginate(50);

        return view('admin.admin-lahan-anggota.crud.index', get_object_vars($this));
    }

    /**
     *
     *
    */
    public function store(LahanAnggotaStoreRequest $request){

        $data = $request->validated();

        $anggota = Anggota::where('user_id',Auth::user()->id)->firstOrFail();

        try
        {

            // dd($data);
            LahanAnggota::updateOrCreate(['anggota_id'=>$anggota->id],$data);
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
