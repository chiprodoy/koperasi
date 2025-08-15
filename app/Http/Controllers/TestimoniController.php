<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MF\Controllers\ResponseCode;

class TestimoniController extends BackendController
{

    public $modelRecords=Testimoni::class;
    public $indexURL='admin.testimoni.index';
    public $editURL='admin.testimoni.edit';
    public $deleteURL='admin.testimoni.destroy';
    public $createURL='admin.testimoni.create';
    public $storeURL='admin.testimoni.store';
   // public $showURL='admin.testimoni.show';
    public $updateURL='admin.testimoni.update';
    public $titleOfCreatePage='Tambah ';
    public $titleOfShowPage='Detail ';
    public $titleOfEditPage='Edit ';
    public $titleOfIndexPage='Testimoni';
    public $extData;
    public $modName='testimoni';
    public $postCategories;
    public $category;
    public $komentar;
    public $commentURL;


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'isi_testimoni' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama','pekerjaan','isi_testimoni']);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('testimoni_photos', 'public');
        }

        Testimoni::create($data);
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil ditambahkan');
    }



    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'isi_testimoni' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama','pekerjaan','isi_testimoni']);

        if ($request->hasFile('photo')) {
            if ($testimoni->photo && Storage::disk('public')->exists($testimoni->photo)) {
                Storage::disk('public')->delete($testimoni->photo);
            }
            $data['photo'] = $request->file('photo')->store('testimoni_photos', 'public');
        }

        $testimoni->update($data);
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil diupdate');
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
