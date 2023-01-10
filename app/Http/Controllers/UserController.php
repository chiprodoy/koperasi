<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MF\Controllers\ApiResponse;

class UserController extends BackendController
{
    public $modelRecords=User::class;
    public $indexURL='user.index';
    public $editURL='user.edit/{uuid}';
    public $deleteURL='user.destroy';
    public $createURL='user.create';
    public $storeURL='user.store';
    public $showURL='user.show';
    public $updateURL='user.update/{uuid}';
    public $titleOfCreatePage='Tambah Pengguna';
    public $titleOfShowPage='Detail Pengguna';
    public $titleOfEditPage='Edit Pengguna';
    public $titleOfIndexPage='Pengguna';
    public $extData;
    public $modName='user';
    public $roles;
    public $category;
    public $curentUserRoles=[];

    public function index()
    {
        if(Auth::user()->isRole(Role::SUPERADMIN)){
            $this->extData=$this->modelRecords::all();
        }else{
            $this->extData=User::whereHas('roles',function($q){
                $q->whereIn('role_name',['admin','kontributor','pengguna']);
            })->get();

        }
        return parent::index();
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->isRole(Role::SUPERADMIN)){
            $this->roles=Role::all();
        }else{
            $this->roles=Role::whereIn('role_name',['admin','kontributor','pengguna'])->get();
        }
        return parent::create();
    }

    public function edit($uid)
    {
        if(Auth::user()->isRole(Role::SUPERADMIN)){
            $this->roles=Role::all();
        }else{
            $this->roles=Role::whereIn('role_name',['admin','kontributor','pengguna'])->get();
        }
        $users=User::with('roles')->where('uuid',$uid)->get();

        foreach($users as $u => $v){
            $this->curentUserRoles[]=$v;
        }
        return parent::edit($uid);
    }
    public function setFcmToken($fcmToken,Request $request){
        $uid=$request->auth()->id;
        try{
            $user=User::find($uid);
            $user->fcm_token=$fcmToken;
            $user->save();
        }catch (\Exception $exception) {
            logger()->error($exception);
            $defaultRoute = $this->controllerName.'.edit';
        $respon= ['response'=>[
                'metadata'=>['message'=>'Data gagal diupdate'.substr($exception,0,100).'...','code'=>$this->errorStatus],
            ]];

        }

        if (0 === strpos($request->headers->get('Accept'), 'application/json')) {
            return response()->json($respon,$respon['response']['metadata']['code']);
        }else{

            return redirect()->route($defaultRoute,$id)

            ->with('responcode',$respon['response']['metadata']['code'])
            ->with('respon', $respon['response']['metadata']['message']);
        }

    }

    public function store(UserRequest $request){
        //parent::insertRecord($request);
        $request->createNewUser();

        return $this->output('success',$request,'Data Berhasil Disimpan',route($this->createURL));

    }
    public function update(UserRequest $request,$uid){

        parent::updateRecord($request,$uid);
        foreach($request->user_roles as $k => $v){
            $this->createResult->roles()->attach($v,['user_modify'=>'su']);
        }
        return $this->output('success',$request,'Data Berhasil Disimpan',route($this->createURL));

    }
}
