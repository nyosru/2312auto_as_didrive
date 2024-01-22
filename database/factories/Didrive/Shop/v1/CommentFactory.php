<?php

namespace Database\Factories\Didrive\Shop\v1;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Didrive\Shop\v1\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => rand(1,20),
            'text' => $this->faker->text(100)
        ];
    }
}
