<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class KwitantieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'kwitantie_number' => $this->faker->numberBetween(23454, 212464796),
            'date' => $this->faker->date(),
            'to' => $this->faker->company(),
        ];
    }
}
