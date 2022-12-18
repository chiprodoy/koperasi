<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'label' => 'Dashboard',
            'mod_name'=>'dashboard',
            'sort_order'=>1
        ]);

        Menu::create([
            'label' => 'Post',
            'mod_name'=>'post',
            'sort_order'=>2
        ]);
        //
    }
}
