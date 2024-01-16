<?php

namespace Database\Seeders\Ar;

use App\Models\Ar\ArObject;
use App\Models\Ar\ArPeople;
use App\Models\Ar\ArPrice;
use App\Models\Ar\Tenant;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ArPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArPrice::factory(50)
            ->state(new Sequence(
                fn (Sequence $sequence) => [
                    'ar_object_id' => ArObject::all()->random(),
//                    'ar_object_id' => \App\Models\Ar\Items::all()->random(),
//                    'ar_people_id' => ArPeople::all()->random()
                    'ar_tenant_id' => Tenant::all()->random()
                ],
            ))
            ->create();
    }
}
