<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\RoleName;
use App\Models\Simkop\Anggota;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_api_get_harga_komoditas(){
        $response = $this->withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
        ])->getJson(route('api.harga_komoditas.index'));
        dd($response);
    }

    public function test_api_post_lahan_anggota(){
        $anggota = Anggota::with('user')->where('user_id','<>',0)->first();
        $user = User::find($anggota->user_id);
        $this->actingAs($user);

        $response = $this->withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
        ])->postJson(route('api.lahan.anggota.store'),['luas_lahan'=>10])->assertStatus(200);
        dd($response);
        $response = $this->withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
        ])->getJson(route('api.lahan.anggota.index'))->assertStatus(200);
    }

    public function test_api_get_lahan_anggota(){
        $anggota = Anggota::with('user')->where('user_id','<>',0)->first();
        $user = User::find($anggota->user_id);
        $this->actingAs($user);
        $response = $this->withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
        ])->getJson(route('api.lahan.anggota.index'))->assertStatus(200);
        dd($response);
    }
}
