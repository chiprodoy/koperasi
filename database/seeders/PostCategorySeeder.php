<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PostCategory::create([
            'name' => 'DIKTUK',
            'slugs' => 'diktuk'
        ]);

        PostCategory::create([
            'name' => 'DIKBANG',
            'slugs' => 'dikbang'
        ]);

        PostCategory::create([
            'name' => 'PAK BHABIN KEPO',
            'slugs' => 'pak-bhabin-kepo'
        ]);

        /**
         *
         */
        PostCategory::create([
            'name' => 'AKPOL',
            'slugs' => 'akpol',
            'parent_category_id'=>1
        ]);
        PostCategory::create([
            'name' => 'BINTARA',
            'slugs' => 'bintara',
            'parent_category_id'=>1
        ]);
        PostCategory::create([
            'name' => 'SIPSS',
            'slugs' => 'sipss',
            'parent_category_id'=>1
        ]);
        PostCategory::create([
            'name' => 'TAMTAMA',
            'slugs' => 'tamtama',
            'parent_category_id'=>1
        ]);
        PostCategory::create([
            'name' => 'CPNS POLRI',
            'slugs' => 'cpns-polri',
            'parent_category_id'=>1
        ]);
        /**
         *
         */
        PostCategory::create([
            'name' => 'SESPIMTI',
            'slugs' => 'sespimti',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'PKP',
            'slugs' => 'pkp',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'PKA',
            'slugs' => 'pka',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'LEMHANAS',
            'slugs' => 'lemhanas',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'SESPIMMEN',
            'slugs' => 'sespimmen',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'PKN TK II',
            'slugs' => 'pkn-tk-ii',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'PKN TK I',
            'slugs' => 'pkn-tk-i',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'PTIK-STIK',
            'slugs' => 'ptik-stik',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'SESPIMMA',
            'slugs' => 'sespimma',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'SIP',
            'slugs' => 'sip',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'PAG',
            'slugs' => 'pag',
            'parent_category_id'=>2
        ]);
        PostCategory::create([
            'name' => 'SBP',
            'slugs' => 'sbp',
            'parent_category_id'=>2
        ]);
    }
}
