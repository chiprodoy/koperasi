<?php

namespace App\Http\Controllers\Simkop;

use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Simkop\AnggotaRequest;
use App\Http\Requests\Simkop\AnggotaUpdateRequest;
use App\Models\Simkop\Anggota;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;
use MF\Controllers\ResponseCode;
use MF\Controllers\UploadFile;

class AnggotaController extends BackendController
{
    public $modelRecords=Anggota::class;
    public $indexURL='admin-anggota-koperasi.index';
    public $editURL='admin-anggota-koperasi.edit';
    public $deleteURL='admin-anggota-koperasi.destroy';
    public $createURL='admin-anggota-koperasi.create';
    public $storeURL='admin-anggota-koperasi.store';
   // public $showURL='post.show';
    public $updateURL='admin-anggota-koperasi.update';
    public $titleOfCreatePage='Tambah Anggota';
    public $titleOfShowPage='Detail Anggota';
    public $titleOfEditPage='Edit Anggota';
    public $titleOfIndexPage='Anggota';
    public $extData;
    public $modName='admin-anggota-koperasi';
    public $dataAnggota;

    public function browse(Request $request)
    {
        $query = Anggota::query();

        // Pencarian
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', "%$search%")
                  ->orWhere('nik', 'like', "%$search%")
                  ->orWhere('nomor_anggota', 'like', "%$search%");
        }

        // Filter berdasarkan status/jenis keanggotaan jika diperlukan
        if ($request->filled('status_keanggotaan')) {
            $query->where('status_keanggotaan', $request->input('status_keanggotaan'));
        }

        if ($request->filled('jenis_keanggotaan')) {
            $query->where('jenis_keanggotaan', $request->input('jenis_keanggotaan'));
        }

        $this->dataAnggota = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.admin-anggota-koperasi.crud.index', get_object_vars($this));
    }
    /***
     *
     *
     */
    public function edit($uuid)
    {
        $query = Anggota::query();

        $this->dataAnggota = $query->where('uuid',$uuid)->first();
        return view('admin.admin-anggota-koperasi.crud.edit', get_object_vars($this));
    }
    /**
     *
     *
     */
    public function store(AnggotaRequest $request){

        try
        {
            $data = $request->validated();
            $data['uuid']= isset($data['uuid']) ? $data['uuid'] : '';
            $data['nomor_anggota']=isset($data['nomor_anggota']) ?: '';
           // dd($data);
            Anggota::create($data);
            return $this->output('success',$request,'Data Berhasil Disimpan',route($this->createURL));
        }
        catch(QueryException $e)
        {
            $this->errorMsg='Data Gagal Disimpan '.$e->getMessage();
            Log::error($e);
            if(env('APP_DEBUG')) return $this->output('error',$request,$e->getMessage(),$this->createURL);
            else return $this->output('error',$request,'Data Gagal Disimpan',$this->createURL);

        }

    }
    public function update(AnggotaUpdateRequest $request){
        $data = $request->validated();
        $data['uuid']= isset($data['uuid']) ? $data['uuid'] : '';
        $data['nomor_anggota']=isset($data['nomor_anggota']) ? $data['nomor_anggota'] : '';
        try{

            $dataAnggota=Anggota::where('uuid',$data['uuid'])->firstOrFail();
            $updated=$dataAnggota->update($data);

            return $this->iSuccess($updated,$request,route($this->editURL,$dataAnggota->uuid),'Data Berhasil Diupdate');
        }
        catch(QueryException $e)
        {
            Log::error($e);
            if(env('APP_DEBUG')) return $this->iError($request,route($this->editURL,$dataAnggota->uuid),ResponseCode::ERROR,$e->getMessage());
            else return $this->iError($request,route($this->editURL,$dataAnggota->uuid),ResponseCode::ERROR,'Data Gagal Diupdate');

        }
    }
    public function destroy($uuid,Request $request){
        $dataAnggota=Anggota::where('uuid',$uuid)->firstOrFail();

        try{

            $updated=$dataAnggota->delete($uuid);

            return $this->iSuccess($updated,$request,route($this->indexURL),'Data Berhasil Dihapus');
        }
        catch(QueryException $e)
        {
            Log::error($e);
            if(env('APP_DEBUG')) return $this->iError($request,route($this->indexURL),ResponseCode::ERROR,$e->getMessage());
            else return $this->iError($request,route($this->indexURL),ResponseCode::ERROR,'Data Gagal Dihapus');

        }
    }
}
