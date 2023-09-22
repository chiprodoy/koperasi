<?php

namespace Database\Factories;

use App\Models\Counter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Counter>
 */
class CounterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'activity'=>fake()->randomElement([Counter::like,Counter::view,Counter::share]),
            'region'=>'palembang',
            'deviceid'=>fake()->regexify('fkr[A-Z]{5}[0-9]{3}'),
        ];
    }

    /**
     * Indicate like.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function like()
    {
        return $this->state(function (array $attributes) {
            return [
                'activity' => Counter::like,
            ];
        });
    }

    /**
     * Indicate like.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    public function view()
    {
        return $this->state(function (array $attributes) {
            return [
                'activity' => Counter::view,
            ];
        });
    }
        /**
     * Indicate like.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    public function share()
    {
        return $this->state(function (array $attributes) {
            return [
                'activity' => Counter::share,
            ];
        });
    }
}
