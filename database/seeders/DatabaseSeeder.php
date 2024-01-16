<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Ar\ArObjectSeeder;
use Database\Seeders\Ar\ArPayedSeeder;
use Database\Seeders\Ar\ArPaySeeder;
use Database\Seeders\Ar\ArPeopleSeeder;
use Database\Seeders\Ar\ArPriceSeeder;
use Database\Seeders\Ar\Group as ArGroup;
use Database\Seeders\Ar\Items as ArItems;
use Database\Seeders\Ar\TenantSeeder as ArTenantSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

//            ArPeopleSeeder::class,
            ArGroup::class,
//            ArItems::class,
            ArObjectSeeder::class,
            ArTenantSeeder::class,

            ArPriceSeeder::class,
            ArPaySeeder::class,
            ArPayedSeeder::class,

////            LarawireNewsSeeder::class,
//            PhpcatNewsSeeder::class,
//            PhpcatServicesSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
