<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        return [
            'teamA_id' => function () {
                return \App\Models\Team::inRandomOrder()->first()->id;
            },
            'teamB_id' => function (array $attributes) {
                return \App\Models\Team::where('id', '!=', $attributes['teamA_id'])->inRandomOrder()->first()->id;
            },
            'status' => $this->faker->randomElement(['Played', 'Pending']),
            'pointsA' => null,
            'pointsB' => null,
        ];
    }
}
