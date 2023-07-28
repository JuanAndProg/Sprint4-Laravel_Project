<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Team;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Team::factory(30)->create();
    
        // Insertar equipos de ejemplo
        Team::create(['name' => 'Equipo A']);
        Team::create(['name' => 'Equipo B']);
        Team::create(['name' => 'Equipo C']);
        // Agregar más equipos si es necesario
    
        Game::factory(20)->create();
    }
}    