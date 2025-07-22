<?php

namespace App\Http\Controllers;

use App\Http\Requests\HargaSawitStoreRequest;
use App\Models\HargaSawit;
use App\Models\Komoditas;
use Carbon\Carbon;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HargaSawitController extends BackendController
{
    public $modelRecords=HargaSawit::class;
    public $indexURL='admin-harga-sawit.index';
    public $editURL='admin-harga-sawit.edit';
    public $deleteURL='admin-harga-sawit.destroy';
    public $createURL='admin-harga-sawit.create';
    public $storeURL='admin-harga-sawit.store';
   // public $showURL='post.show';
    public $updateURL='admin-harga-sawit.update';
    public $titleOfCreatePage='Tambah Anggota';
    public $titleOfShowPage='Detail Anggota';
    public $titleOfEditPage='Edit Anggota';
    public $titleOfIndexPage='Anggota';
    public $extData;
    public $modName='admin-harga-sawit';
    public $dataHargaSawit;
    public $komoditas;
    //

    public function browse(Request $request){
        $query = HargaSawit::query();

        if ($request->filled('from')) {
            $query->where('tgl_update_harga', '>=', $request->from);
        }
        if ($request->filled('to')) {
            $query->where('tgl_update_harga', '<=', $request->to);
        }

        if(!$request->filled('from') && !$request->filled('to')){
            $query->where('tgl_update_harga', Carbon::now()->toDateString());
        }

        $this->dataHargaSawit = $query->orderBy('tgl_update_harga', 'desc')->paginate(20);
        return view('admin.admin-harga-sawit.crud.index', get_object_vars($this));
    }
       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->komoditas = Komoditas::all();
        return parent::create();
    }

    /**
     *
     *
     */
    public function store(HargaSawitStoreRequest $request){

        try
        {
            $data = $request->validated();

           // dd($data);
            HargaSawit::create($data);
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
}
