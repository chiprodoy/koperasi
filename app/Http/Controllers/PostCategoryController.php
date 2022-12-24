<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisProdukRequest;
use App\Http\Requests\KategoriRequest;
use App\Http\Requests\PostKategoriRequest;
use App\Models\JenisProduk;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use MF\Controllers\UploadFile;


class PostCategoryController extends BackendController
{
    use UploadFile;

    public $modelRecords=PostCategory::class;
    public $indexURL='category.index';
    public $editURL='category.edit/{uuid}';
    public $deleteURL='category.destroy';
    public $createURL='category.create';
    public $storeURL='category.store';
    public $showURL='category.show';
    public $updateURL='category.update';
    public $titleOfCreatePage='Tambah Kategori';
    public $titleOfShowPage='Detail Kategori';
    public $titleOfEditPage='Edit Kategori';
    public $titleOfIndexPage='Kategori';

    public function store(PostKategoriRequest $request){
        return parent::insertRecord($request);
    }
       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostKategoriRequest $request, $uid)
    {
        return parent::updateRecord($request,$uid);
    }

         /**
     * Show all kategori by parent
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function indexByParent($slug){
        $parent=PostCategory::where('slug',$slug)->first();
        $pc=PostCategory::where('parent_category_id','=',$parent->id);

        if($pc->count())  return $this->success($pc->get(),request(),'','Berhasil');
        else return response()->noContent();
    }
}
