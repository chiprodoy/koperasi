<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(PostCategorySeeder::class);
        $this->call(FileCategorySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(AnggotaSeeder::class);





    }
}
