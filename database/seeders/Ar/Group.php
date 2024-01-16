<?php

namespace Database\Seeders\Ar;

use Illuminate\Database\Seeder;

class Group extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ar\Group::factory(20)
//            ->state(new Sequence(
//                fn (Sequence $sequence) => ['ar_price_id' => ArPrice::all()->random()],
//            ))
            ->create();
    }
}
