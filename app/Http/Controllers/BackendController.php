<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use MF\Controllers\ApiResponse;
use MF\Controllers\BreadCrumb;
use MF\Controllers\DataTable;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;
use MF\Controllers\ResponseCode;

class BackendController extends Controller
{
    use PageMenu,DataTable,BreadCrumb,ApiResponse;
    public $modelRecords;
    public $indexURL;
    public $editURL;
    public $deleteURL;
    public $updateURL;
    public $createURL;
    public $storeURL;
    public $showURL;
    public $RECORD;
    public $PUTMETHOD='PUT';
    public $DESTROYMETHOD='DESTROY';
    public $POSTMETHOD='POST';
    public $titleOfCreatePage='Tambah Data';
    public $viewNameOfCreatePage='components.viho.crud.create';
    public $titleOfShowPage='Detail';
    public $viewNameOfShowPage='components.viho.crud.show';
    public $titleOfEditPage='Edit';
    public $viewNameOfEditPage='components.viho.crud.edit';
    public $titleOfIndexPage;
    public $viewNameOfIndexPage='components.viho.crud.index';
    public $newData;
    public $showWith=[];
    public $recordId;

    public function __construct()
    {
        $this->menuModel=\App\Models\Menu::class;
        $this->getBackEndMenu();
        $this->BREADCRUMB_ITEM=[
            new Page('Home',route('dashboard'))
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->CURRENT_PAGE=new Page($this->titleOfIndexPage,route($this->indexURL));
        $this->setBreadCrumb();

        return view($this->viewNameOfIndexPage,get_object_vars($this));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CURRENT_PAGE=new Page($this->titleOfCreatePage,route($this->createURL));
        $this->setBreadCrumb();
        return view($this->viewNameOfCreatePage,get_object_vars($this));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uid)
    {
        $this->RECORD=$this->modelRecords::where('uuid',$uid)->first();
        $this->indexPage=new Page($this->titleOfIndexPage,route($this->indexURL));
        array_push($this->BREADCRUMB_ITEM,$this->indexPage);
        $this->CURRENT_PAGE=new Page($this->titleOfShowPage,route($this->showURL,$uid));
        $this->setBreadCrumb();
        $this->recordId=$uid;
        return view($this->viewNameOfShowPage,get_object_vars($this));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uid)
    {
        $this->RECORD=$this->modelRecords::where('uuid',$uid)->first();
        $this->indexPage=new Page($this->titleOfIndexPage,route($this->indexURL));
        array_push($this->BREADCRUMB_ITEM,$this->indexPage);
        $this->CURRENT_PAGE=new Page($this->titleOfEditPage,route($this->editURL,$uid));
        $this->setBreadCrumb();
        return view($this->viewNameOfEditPage,get_object_vars($this));
    }

    public function insertRecord($request){
        $this->setNewData($request);
        try
        {
            $result=$this->modelRecords::create($this->newData);
            return $this->success($result,$request,route($this->createURL),'Data Berhasil Disimpan');
        }
        catch(QueryException $e)
        {
            Log::error($e);
            if(env('APP_DEBUG')) return $this->error($request,route($this->createURL),ResponseCode::ERROR,$e->getMessage());
            else return $this->error($request,route($this->createURL),ResponseCode::ERROR,'Data Gagal Disimpan');

        }

    }
    /*

    */
    public function updateRecord($request,$uid){
        try
        {
            $this->setNewData($request);

            $updated=$this->modelRecords::where('uuid',$uid)->update($this->newData);

            return $this->success($updated,$request,route($this->editURL,$uid),'Data Berhasil Diupdate');
        }
        catch(QueryException $e)
        {
            Log::error($e);
            if(env('APP_DEBUG')) return $this->error($request,route($this->editURL,$uid),ResponseCode::ERROR,$e->getMessage());
            else return $this->error($request,route($this->editURL,$uid),ResponseCode::ERROR,'Data Gagal Diupdate');

        }

    }
    /*
    *
    */
    public function setNewData($request){
        $m=new $this->modelRecords;
        foreach($m->getFillable() as $k => $v){
            $this->newData["$v"]=$request->$v;
        }
/*         foreach($this->modelRecords::$formFields as $k =>$v){
            $field=$v['field'];
            $this->newData["$field"]=$request->$field;
        } */
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
            return $this->success($deleted,$request,$this->indexURL,'Data Berhasil Diupdate');
        }
        catch(QueryException $e)
        {
            if(env('APP_DEBUG')) return $this->error($request,$this->indexURL,ResponseCode::ERROR,$e->getMessage());
            else return $this->error($request,$this->indexURL,ResponseCode::ERROR,'Data Gagal Diupdate');

        }

    }
    public function viewRecord(){
        $this->modelRecords=$this->modelRecords::orderBy('id','desc');
        $this->modelRecords->paginate($this->RECORD_PER_PAGE);
    }

}


