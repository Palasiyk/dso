<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game_playoff;
use App\Models\Oponent;
use App\Models\OponentGames;
use App\Models\Statistik;
use App\Models\Team;
use Database\Factories\OponentGamesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Oponent::factory(10)->create();
//        Game_playoff::factory(10)->create();
//        Team::factory(10)->create();
//        Statistik::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
