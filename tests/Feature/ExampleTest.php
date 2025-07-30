<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
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
}
