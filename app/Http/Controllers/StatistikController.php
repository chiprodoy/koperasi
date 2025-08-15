<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistik;
use Illuminate\Database\QueryException;
use MF\Controllers\ResponseCode;

class StatistikController extends BackendController
{

    public $modelRecords=Statistik::class;
    public $indexURL='admin.statistik.index';
    public $editURL='admin.statistik.edit';
    public $deleteURL='admin.statistik.destroy';
    public $createURL='admin.statistik.create';
    public $storeURL='admin.statistik.store';
   // public $showURL='admin.statistik.show';
    public $updateURL='admin.statistik.update';
    public $titleOfCreatePage='Tambah ';
    public $titleOfShowPage='Detail ';
    public $titleOfEditPage='Edit ';
    public $titleOfIndexPage='Statistik';
    public $extData;
    public $modName='statistik';
    public $postCategories;
    public $category;
    public $komentar;
    public $commentURL;


    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|string|max:255|unique:statistiks,slug',
            'icon' => 'nullable|string|max:255',
            'label' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
        ]);

        Statistik::create($request->all());
        return redirect()->route($this->indexURL)->with('success', 'Statistik berhasil ditambahkan');
    }



    public function update(Request $request, Statistik $statistik)
    {
        $request->validate([
            'slug' => 'required|string|max:255|unique:statistiks,slug,'.$statistik->id,
            'icon' => 'nullable|string|max:255',
            'label' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
        ]);

        $statistik->update($request->all());
        return redirect()->route($this->indexURL)->with('success', 'Statistik berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uid,Request $request)
    {
        try
        {
            $deleted=$this->modelRecords::where('uuid',$uid)->delete();
            return $this->iSuccess($deleted,$request,route($this->indexURL),'Data Berhasil Diupdate');
        }
        catch(QueryException $e)
        {
            if(env('APP_DEBUG')) return $this->error($request,route($this->indexURL),ResponseCode::ERROR,$e->getMessage());
            else return $this->error($request,($this->indexURL),ResponseCode::ERROR,'Data Gagal Diupdate');

        }

    }

}
