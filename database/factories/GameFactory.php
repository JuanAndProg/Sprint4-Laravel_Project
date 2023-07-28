<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        $status = $this->faker->randomElement(['Played', 'Pending']);

        return [
            'teamA_id' => function () {
                return Team::inRandomOrder()->first()->id;
            },
            'teamB_id' => function (array $attributes) {
                return Team::where('id', '!=', $attributes['teamA_id'])->inRandomOrder()->first()->id;
            },
            'status' => $status,
            'pointsA' => $status === 'Pending' ? null : $this->faker->numberBetween(0, 10),
            'pointsB' => $status === 'Pending' ? null : $this->faker->numberBetween(0, 10),
        ];
    }
}
