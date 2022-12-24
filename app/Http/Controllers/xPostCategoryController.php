<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use MF\Controllers\ApiResponse;
use MF\Controllers\ControllerResources;

class xPostCategoryController extends Controller
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


}
