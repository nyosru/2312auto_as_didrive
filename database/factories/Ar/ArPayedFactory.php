<?php

namespace Database\Factories\Ar;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ar\ArPayed>
 */
class ArPayedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $out = ['date_start' => date('Y-m-d', $_SERVER['REQUEST_TIME']-(rand(1,20)*3600*24*30))];
        $out['date_end'] = date('Y-m-d',strtotime($out['date_start'].' +1 month -1 day'));
        return $out;
    }
}
