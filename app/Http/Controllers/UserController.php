<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use MF\Controllers\ApiResponse;
use MF\Controllers\ControllerResources;

class UserController extends Controller
{
      use ApiResponse,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        ControllerResources::index as private __index;
    }

    public $namaModel=User::class;
    public $title="User";
    public $controllerName='user';


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

}
