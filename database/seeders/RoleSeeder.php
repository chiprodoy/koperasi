<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Role::create([
            'role_name'=>Role::SUPERADMIN,
            'user_modify' => 'su',
            'user_id' => 1
        ]);
        //2
        Role::create([
            'role_name'=>Role::ADMIN,
            'user_modify' => 'su',
            'user_id' => 1
        ]);
        //3
        Role::create([
            'role_name'=>Role::KONTRIBUTOR,
            'user_modify' => 'su',
            'user_id' => 1
        ]);
        //4
        Role::create([
            'role_name'=>Role::PENGGUNA,
            'user_modify' => 'su',
            'user_id' => 1
        ]);
    }
}
