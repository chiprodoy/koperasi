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
        Menu::updateOrCreate([
            'label' => 'Dashboard',
            'mod_name' => 'dashboard',
            'sort_order' => 1
        ]);

        Menu::updateOrCreate([
            'label' => 'Post',
            'mod_name' => 'post',
            'sort_order' => 2
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal Kecerdasan',
            'mod_name' => 'soal-kecerdasan',
            'sort_order' => 3
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal Bahasa Indonesia',
            'mod_name' => 'soal-bahasa-indonesia',
            'sort_order' => 4
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal Kepribadian',
            'mod_name' => 'soal-kepribadian',
            'sort_order' => 5
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal Kecermatan',
            'mod_name' => 'soal-kecermatan',
            'sort_order' => 6
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal Bahasa Inggris',
            'mod_name' => 'soal-english',
            'sort_order' => 7
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal Numerik',
            'mod_name' => 'soal-numeric',
            'sort_order' => 8
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal TPA',
            'mod_name' => 'soal-tpa',
            'sort_order' => 9
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal TPU',
            'mod_name' => 'soal-tpu',
            'sort_order' => 10
        ]);

        Menu::updateOrCreate([
            'label' => 'Soal TWK',
            'mod_name' => 'soal-twk',
            'sort_order' => 11
        ]);

        Menu::updateOrCreate([
            'label' => 'Tips & Tricks',
            'mod_name' => 'tips-and-tricks',
            'sort_order' => 12
        ]);
    }
}
