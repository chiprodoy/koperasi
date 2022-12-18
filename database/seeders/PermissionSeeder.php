<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Permission::create([
            'permission_name' => 'Full Access',
            'mod_name' => '*',
            'user_modify'=>'su',
            'user_id'=>1
        ]);

        Role::find(1)->permissions()->attach(1,['user_modify'=>'su','user_id'=>1]);



        //
    }
}
