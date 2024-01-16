<?php

namespace Database\Seeders\Ar;

use App\Models\Ar\ArObject;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ArObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArObject::factory(50)
            ->state(new Sequence(
                fn (Sequence $sequence) => ['group_id' => \App\Models\Ar\Group::all()->random()],
            ))
//                group_id
            ->create();
    }
}
