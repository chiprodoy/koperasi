<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BackendController
{


    public function index(){
        return view('admin.dashboard',get_object_vars($this));
    }
    //
}
