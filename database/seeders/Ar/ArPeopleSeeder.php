<?php

namespace Database\Seeders\Ar;

use App\Models\Ar\ArPeople;
use Illuminate\Database\Seeder;

class ArPeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArPeople::factory(10)
//            ->state(new Sequence(
//                fn (Sequence $sequence) => ['ar_price_id' => ArPrice::all()->random()],
//            ))
            ->create();
    }
}
