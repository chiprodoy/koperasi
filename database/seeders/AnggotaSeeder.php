<?php

namespace Database\Seeders;

use App\Models\Simkop\Anggota;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(1)->create(['uuid'=>fake()->uuid()]);
        $user[0]->roles()->attach(5,['user_modify'=>'su']);
        Anggota::factory()->count(1)->create([
            'nomor_anggota'=>null,
            'nama'=>$user[0]->name,
            'telepon'=>$user[0]->nomor_telpon,
            'user_id'=>$user[0]->id
            ]);
    }
}
