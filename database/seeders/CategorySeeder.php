<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs =
            [

                'Action',
                'Adventure',
                'Role-Playing',
                'Simulation',
                'Strategy',
                'Puzzle',
                'Platformer',
                'Shooter',
                'Fighting',
                'Sports',
                'Racing',
                'Open World',
                'Party',
                'Horror',
                'Casual',

            ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        };
    }
}
