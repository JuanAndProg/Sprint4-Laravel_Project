<?php

namespace Database\Factories;

use App\Models\Game;
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
        return [
            'TeamA' => $this->faker->Str::random(10),
            'TeamB' => $this->faker->Str::random(10),
            'status' => $this->faker->randomElement(['Played','Pending'])
        ];
    }
}
