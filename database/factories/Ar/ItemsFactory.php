<?php

namespace Database\Factories\Ar;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'итем '.fake()->name(),
            'nomer' => rand(1,300),
            'address' => fake()->name(),
            'group_id' => rand(1,20),
            //            $table->string('name');
            //            $table->string('address')->nullable();
            //
            //            $table->foreignId('group_id')
            //                ->references('id')
            //                ->on('groups')
            //                ->cascadeOnDelete();
        ];
    }
}
