<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pendidikan;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'uid'=>'-',
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            //'tempat_lahir'=>'palembang',
            //'tgl_lahir'=>'1986-02-24',
            //'pekerjaan'=>'admin',
            //'pendidikan'=>Pendidikan::S1,
            'password' => 'password']);



        User::find(1)->roles()->attach(1,['user_modify'=>'su']);



        $superadmin=User::create([
                    'uid'=>'-',
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    //'tempat_lahir'=>'palembang',
                    //'tgl_lahir'=>'1986-02-24',
                    //'pekerjaan'=>'admin',
                    //'pendidikan'=>Pendidikan::S1,
                    'password' => 'password']);

                // Adding permissions via a role
        User::find(2)->roles()->attach(2,['user_modify'=>'su']);

    }
}
