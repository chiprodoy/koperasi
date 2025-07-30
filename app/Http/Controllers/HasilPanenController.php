<?php

namespace App\Http\Controllers;

use App\Http\Requests\HasilPanenStoreRequest;
use App\Models\HasilPanen;
use App\Models\Simkop\Anggota;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilPanenController extends BackendController
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //jika login admin tampilkan semua record, jika anggota tampilkan yang hanya anggota
        $this->RECORD = $this->modelRecords::all();
        return parent::index();
    }

    public function store(HasilPanenStoreRequest $request){

        $anggota = Anggota::where('user_id',Auth::user()->id)->first();
        $input = $request->validated();

        if($anggota){
            $anggotaID=$anggota->id;
        }else{
            $anggotaID=$input['anggota_id'];
        }
        try{
            $res = HasilPanen::updateOrCreate(
                ['anggota_id' => $anggotaID, 'tgl_panen' => $input['tgl_panen']],
                [
                    'jumlah_hasil_panen' => $input['jumlah_hasil_panen'],
                    'luas_lahan' => $input['luas_lahan'],
                    'harga_per_kg'=> $input['harga_per_kg'],
                    'uuid'=>$input['uuid']
                ]
            );
            return $this->output('success',$request,'Berhasil Menyimpan Data');

        }catch(Exception $e){
            return $this->output('error',$request,'Terjadi kesalahan'.$e->getMessage());
        }
    }
}
