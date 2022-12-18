<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukHalalRequest;
use App\Models\ProdukHalal;
use Illuminate\Http\Request;

class ProdukHalalController extends BackendController
{
    public $modelRecords=ProdukHalal::class;
    public $indexURL='produk_halal.index';
    public $editURL='produk_halal.edit';
    public $deleteURL='produk_halal.destroy';
    public $createURL='produk_halal.create';
    public $storeURL='produk_halal.store';
    public $showURL='produk_halal.show';
    public $updateURL='produk_halal.update';
    public $titleOfCreatePage='Tambah Produk Halal';
    public $titleOfShowPage='Detail Produk';
    public $titleOfEditPage='Edit Produk Halal';
    public $titleOfIndexPage='Produk Halal';
    //

    public function store(ProdukHalalRequest $request){
        return parent::insertRecord($request);
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uid)
    {
        return parent::updateRecord($request,$uid);
    }
}
