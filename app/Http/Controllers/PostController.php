<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use MF\Controllers\ApiResponse;
use MF\Controllers\ControllerResources;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;
use MF\Controllers\UploadFile;

class PostController extends BackendController
{
    use UploadFile;

    public $modelRecords=Post::class;
    public $indexURL='post.index';
    public $editURL='post.edit';
    public $deleteURL='post.destroy';
    public $createURL='post.create';
    public $storeURL='post.store';
    public $showURL='post.show';
    public $updateURL='post.update';
    public $titleOfCreatePage='Tambah Konten';
    public $titleOfShowPage='Detail Konten';
    public $titleOfEditPage='Edit Konten';
    public $titleOfIndexPage='Konten';
    public $extData;
    public $modName='post';
    public $postCategories;


    // public function __construct()
    // {
    //     $this->addAction=route('post.create');
    //     $this->saveAction=route('post.store');
    //     $this->readAction=route('post.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->postCategories=PostCategory::all();

        return parent::create();
    }
       /**
     * Show all POST by kategori
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function indexByCategory($slug){
        $pc=Post::whereRelation('categories','slugs','=',$slug);

        if($pc->count())  return $this->iSuccess($pc->get(),request(),'','Berhasil');
        else return response()->noContent();
    }

     /**
     * Show a POST by slug
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function show($slug){
        $pc=Post::with('categories')->where('slug',$slug);
        if($pc->count())  return $this->iSuccess($pc->get(),request(),'','Berhasil');
        else return response()->noContent();
    }
    /**
     * Show a POST by slug
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function browse(Request $request,$categoryslug){
        $cat=PostCategory::where('slugs',$categoryslug)->first();

        $this->titleOfIndexPage=$cat->name;
        $this->indexURL=route('browse.index',$cat->slugs);
        $this->editURL='browse.edit/'.$cat->name.'/{uuid}/';

        $this->modName=strtolower($cat->name);

        $this->CURRENT_PAGE=new Page($this->titleOfIndexPage,$this->indexURL);
        $this->setBreadCrumb();

       // $pc=Post::where('slug',$slug)->with('categories')->where('id',$cat->id);
       $pc=Post::whereHas('categories',function($q)use($cat){
            $q->where('post_category_id',$cat->id);

        });
        $this->extData=$pc;
       //dd($pc->toSql());
        if($request->wantsJson()){
           if($pc->count())  return $this->iSuccess($pc->get(),request(),'','Berhasil');
           else return response()->noContent();
        }else{
            if (view()->exists('admin.'.$this->modName.'.crud.index'))
            {
            return view('admin.'.$this->modName.'.crud.index',array_merge(get_object_vars($this),['category'=>$cat]));

            }
            return view('components.viho.crud.index',array_merge(get_object_vars($this),['category'=>$cat]));
        }
    }

    /**
     * Show a POST by slug
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function showByKategori($kategori,$slug){
        $cat=PostCategory::where('slugs',$kategori)->first();

       // $pc=Post::where('slug',$slug)->with('categories')->where('id',$cat->id);
       $pc=Post::whereHas('categories',function($q)use($cat){
            $q->where('post_category_id',$cat->id);

        })->where('slug',$slug);
       //dd($pc->toSql());
       if($pc->count())  return $this->iSuccess($pc->get(),request(),'','Berhasil');
        else return response()->noContent();
    }

    public function browseEdit($category,$uid)
    {
        $this->updateURL='browse.update/'.$category.'/{uuid}/';
        $this->indexURL='browse.index/'.$category;

        $cat=PostCategory::where('slugs',$category)->first();

        $this->modName=strtolower($cat->name);

        return parent::edit($uid);
    }

          /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function browseUpdate(PostRequest $request,$kategori,$uid)
    {
        $cat=PostCategory::where('slugs',$kategori)->first();

        $this->editURL='browse.edit/'.$cat->name.'/{uuid}/';
        return parent::updateRecord($request,$uid);
    }

    public function store(PostRequest $request){

        parent::insertRecord($request);
        foreach($request->post_category as $k => $v){
            $this->createResult->categories()->attach($v,['user_modify'=>'su']);
        }
        return $this->output('success',$request,'Data Berhasil Disimpan',route($this->createURL));

    }

}
