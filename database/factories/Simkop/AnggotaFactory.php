<?php

namespace Database\Factories\Simkop;

use App\Models\Simkop\Anggota;
use App\Models\Simkop\JenisKeanggotaan;
use App\Models\Simkop\StatusKeanggotaan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           // 'user_id',$user->id,
            'nik' => fake()->randomNumber(5, true),
            'nama' => fake()->name(),// fake()->unique()->safeEmail(),
            'tgl_lahir' => fake()->date(),
            'jenis_kelamin' => 1,
            'pekerjaan'=>'petani',
            'alamat'=>fake()->address(),
            'kelurahan'=>'tanah abang',
            'kecamatan'=>'tanah abang',
            'kota'=>fake()->city(),
            'provinsi'=>fake()->state(),
            'telepon'=>fake()->e164PhoneNumber(),
            'nama_ibu'=>fake()->name('female'),
            'tgl_mulai_anggota'=>now(),
            'status_keanggotaan'=>StatusKeanggotaan::AKTIF,
            //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'jenis_keanggotaan' => JenisKeanggotaan::ANGGOTA,
            'uuid'=>fake()->uuid()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {

    }
}
