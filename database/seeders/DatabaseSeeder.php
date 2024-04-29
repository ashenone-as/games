<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Requirement;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            GameSeeder::class,
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        Developer::factory()
            ->count(30)
            ->create();

        Requirement::factory()
            ->count(30)
            ->create();


    }
}
