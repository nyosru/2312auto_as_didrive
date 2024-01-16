<?php

namespace Database\Factories\Ar;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArPricece>
 */
class ArPriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => rand(5,60)*100,
            'date_start' => date( 'Y-m-d', $_SERVER['REQUEST_TIME']-24*3600*50*rand(1,10))
        ];
    }
}
