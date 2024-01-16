<?php

namespace Database\Seeders\Ar;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ar\Items::factory(200)
//            ->state(new Sequence(
//                fn (Sequence $sequence) => ['ar_price_id' => ArPrice::all()->random()],
//            ))
            ->create();
    }
}
