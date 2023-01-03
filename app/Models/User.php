<?php

namespace App\Models;

use App\View\Components\Viho\Form\CheckboxGroup;
use App\View\Components\Viho\Form\Input;
use App\View\Components\Viho\Form\InputEmail;
use App\View\Components\Viho\Form\InputHidden;
use App\View\Components\Viho\Form\InputPassword;
use App\View\Components\Viho\Form\InputText;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'uuid',
        'nomor_telpon'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $columns = [
        ['field'=>'name','title'=>'Nama'],
        ['field'=>'email','title'=>'Email'],
        ['field'=>'nomor_telpon','title'=>'Nomor Telpon'],

    ];

   /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $formFields = [
        'name'=> ['field'=>'name','title'=>'Nama','type'=>InputText::class],
        'email'=> ['field'=>'email','title'=>'Email','type'=>InputEmail::class],
        'nomor_telpon'=> ['field'=>'nomor_telpon','title'=>'Nomor Telpon','type'=>InputText::class],
        'password'=> ['field'=>'password','title'=>'Password','type'=>InputPassword::class],
        'user_roles'=> [
             'field'=>'user_roles',
             'title'=>'Roles',
             'type'=>CheckboxGroup::class,
             'option'=>[
                 Role::class,
                 'id',
                 'role_name',
                 null, //['and'=>['program_studi_id',Auth::user()->getSelectedProdi()]]
                 ['role_name','asc'],
                 'roles'
             ],
         ],
         'uuid'=> ['field'=>'uuid','type'=>InputHidden::class],


     ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['roles'];
    /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Set the uid.
     *
     * @param  string  $value
     * @return void
     */
    public function setUuidAttribute($value)
    {
        $this->attributes['uuid'] = (string) Str::uuid();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getPermission() {
        return $this->roles();
    }

    public function isRole($role){
        return $this->roles()->where('role_name',$role)->count() > 0;

        //return ($this->roles()->where('role_name',$role)->count() > 0) ? true : false ;
    }

    public function hasPermission($permission,$modName) {
        foreach($this->roles as $k => $v){
            return $v->permissions()
                        ->where('permission_name', $permission)
                        ->where('mod_name',"$modName")
                        ->orWhere('mod_name','*')->first() ?: false;
        }
        /*       \Illuminate\Support\Facades\DB::enableQueryLog();
             $data=$this->role->permissions()
             ->where('permission_name', $permission)
             ->where('mod_name',"$modName")->first();
             dd($data);
             dd(\Illuminate\Support\Facades\DB::getQueryLog()); */

            //  return $this->roles()
            //  ->where('role_name', $permission.':'.$modName)->first() ?: false;
    }
}
