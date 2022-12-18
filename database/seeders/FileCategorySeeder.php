<?php

namespace Database\Seeders;

use App\Models\FileCategory;
use Illuminate\Database\Seeder;

class FileCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FileCategory::create([
            'name' => 'Hypnosis',
            'slugs' => 'hypnosis'
        ]);
        FileCategory::create([
            'name' => 'HPHT',
            'slugs' => 'hpht'
        ]);
    }
}
