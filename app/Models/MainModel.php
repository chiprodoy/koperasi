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

abstract class MainModel extends Model implements iModel
{
   // use SoftDeletes, ModelEventLogger;
   use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $hidden = [
        'insert_by', 'update_by','delete_by','user_modify'
    ];

    protected $guarded=[];

/*     public function __construct()
    {
        parent::__construct();
        array_push($this->fillable,'user_modify');
        array_push($this->fillable,'user_id');

    } */

    public function setUserModifyAttribute($value){
        $this->attributes['user_modify'] = (isset(Auth::user()->name) ? Auth::user()->name : 'bingo'); // Auth::user()->name; //
    }

    public function setUserIdAttribute($value){
        $this->attributes['user_id'] = (empty(Auth::user()->id) ? $value : Auth::user()->id);
    }

    public function getFormFields(){
        return $this->scafoldFormFields();
    }

    public function scafoldFormFields(){
        $sch[$this->primaryKey]=FIELD::Hidden();

        foreach($this->fillable as $k){
            if(Str::endsWith($k,'_id')){
                $str=explode('_',$k);
                array_pop($str);
                $modelName=ucfirst(Str::camel(implode('',$str)));
                $tbname=strtolower(Str::plural(implode('_',$str)));
                $relatedClass= (class_exists("App\\$modelName") ? "App\\$modelName" : "App\\Models\\$modelName");
                $relatedData=[];

                //dd($relatedClass);
                if(class_exists($relatedClass)){
                    //if ($this->getConnection()->getSchemaBuilder()->hasColumn($this->getTable(), 'nama_'.$tbname))  {

                    if (Schema::hasColumn($tbname,'nama_'.Str::singular($tbname)))  {
                        $relatedData=$relatedClass::select('nama_'.Str::singular($tbname).' as text','id as reckey')->get()->toArray();
                    }else{
                        foreach($this->viewable() as $vk =>$v){
                            if(is_array($v['field']) && $v['field'][0]==Str::singular($tbname)){
                                $relatedData=$relatedClass::select($v['field'][1].' as text','id as reckey')->get()->toArray();
                            }

                        }
                    }
                    $sch[$k] = FIELD::Select($relatedData)->label(str_replace(['_','id'],' ',$k));
                }
            }else{
                $sch[$k]=$this->schemaToField($k,DB::getSchemaBuilder()->getColumnType($this->getTable(), $k));
            }
        }
//dd($sch);
        return $sch;
    }


    public function schemaToField($col,$type){

        if($col==$this->primaryKey){
            return FIELD::Hidden();
        }

        elseif($type=='string'){
           return FIELD::Text(255)->label(ucwords(str_replace('_',' ',$col)));
        }
        elseif($type=='integer'){
            return FIELD::Text(15)->label(ucwords(str_replace('_',' ',$col)));
        }
        elseif($type=='boolean'){
            return FIELD::Checkbox(['true','false'])->label(ucwords(str_replace('_',' ',$col)));
        }
        elseif($type=='date'){
            return FIELD::Date()->label(ucwords(str_replace('_',' ',$col)));
        }
        elseif($type=='time'){
            return FIELD::Time()->label(ucwords(str_replace('_',' ',$col)));
        }elseif($type=='year'){
            return FIELD::Year()->label(ucwords(str_replace('_',' ',$col)));
        }
        else{
            return FIELD::Text(15)->label(ucwords(str_replace('_',' ',$col)));
        }

    }

    public static function getRelationShip(){
        return;

    }

    public static function getFilterable(){}
}
