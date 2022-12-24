<?php

namespace App\Models;

//require_once "Laravel/MF/Licenses.php";
//require_once "Laravel/MF/ModelEventLogger.php";

//use App\Traits\ModelEventLogger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use MF\iModel;
use MF\FIELD;

abstract class MainModel extends Model
{
   // use SoftDeletes, ModelEventLogger;
   use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $hidden = [
        'insert_by', 'update_by','delete_by','user_modify'
    ];


    public function setUserModifyAttribute($value){
        $this->attributes['user_modify'] = (isset(Auth::user()->name) ? Auth::user()->name : 'bingo'); // Auth::user()->name; //
    }

    public function setUserIdAttribute($value){
        $this->attributes['user_id'] = (empty(Auth::user()->id) ? $value : Auth::user()->id);
    }

    public function setUuidAttribute($value){
        $this->attributes['uuid'] = (Str::isUuid($value) ? $value : Str::uuid()); //
    }

}
