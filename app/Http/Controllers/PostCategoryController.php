<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use MF\Controllers\ApiResponse;
use MF\Controllers\ControllerResources;

class PostCategoryController extends Controller
{
      use ApiResponse,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        ControllerResources::index as private __index;
    }

    public $namaModel=PostCategory::class;
    public $title="Post";
    public $controllerName='post';


    public function __construct()
    {
        $this->__ctrlResConstruct();
        $this->addAction=route('kehamilan.create');
        $this->saveAction=route('kehamilan.store');
        $this->readAction=route('kehamilan.index');
    }
    /**
     * Display All Cateogory POST
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function index(){
        return $this->__index();
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
