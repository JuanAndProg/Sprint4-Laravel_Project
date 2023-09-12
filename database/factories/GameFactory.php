<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Game::class;

    public function definition(): array
    {
        $status = $this->faker->randomElement(['Played', 'Pending']);

        return [
<<<<<<< HEAD
            'teamA_id' => function () {
                return Team::inRandomOrder()->first()->id;
            },
            'teamB_id' => function (array $attributes) {
                return Team::where('id', '!=', $attributes['teamA_id'])->inRandomOrder()->first()->id;
            },
            'status' => $status,
            'pointsA' => $status === 'Pending' ? null : $this->faker->numberBetween(0, 10),
            'pointsB' => $status === 'Pending' ? null : $this->faker->numberBetween(0, 10),
=======
            'TeamA' => $this->faker->Str::random(10),
            'TeamB' => $this->faker->Str::random(10),
            'status' => $this->faker->randomElement(['Played','Pending'])
>>>>>>> 2aff91cecd200f0b516347176debbef68ed3cc43
        ];
    }
}
