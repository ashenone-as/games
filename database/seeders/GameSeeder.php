<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs =
            [

                'Grand Theft Auto V',
                'The Witcher 3: Wild Hunt',
                'Red Dead Redemption 2',
                'Minecraft',
                "Assassin's Creed 2",
                'Batman:Arkham Knight',
                'The Legend of Zelda: Breath of the Wild',
                'Portal 2',
                'Half-Life 2',
                'Fallout 4',
                'Elden Ring',
                'Grand Theft Auto: San Andreas',
                "PlayerUnknown's Battlegrounds",
                'League of Legends',
                'Call of Duty: Modern Warfare',
                'The Elder Scrolls V: Skyrim',
                'Super Metroid',
                'Tetris Effect',
                'Dark Souls',
                'The Last of Us',
                'God of War',
                'Super Smash Bros. Ultimate',
                'Monster Hunter: World',
                'Horizon Zero Dawn',
                'Uncharted 4: A Thief\'s End',
                'The Legend of Zelda: Ocarina of Time',
                'Metal Gear Solid',
                'Super Mario World',
                'Street Fighter II: The World Warrior',
                'Pac-Man',
                'Super Bomberman',
                'Sonic the Hedgehog',
                'Donkey Kong Country',
                'GoldenEye 007',
                'Gran Turismo',
                'Halo: Combat Evolved',
                'BioShock',
                'The Sims',
                'Stardew Valley',



             ];

        foreach ($objs as $obj) {
            Game::create([
                'name' => $obj,
            ]);
        };
    }
}
