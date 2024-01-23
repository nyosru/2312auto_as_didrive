<?php

namespace Database\Factories\Didrive;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Didrive\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => 'order',
            'model_id' => rand(1, 50),
            'type' => 'status',
            'msg' => $this->faker->text(100)
        ];
    }
}
