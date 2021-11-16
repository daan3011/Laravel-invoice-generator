<?php

namespace Database\Factories;

use App\Models\Kwitantie;
use App\Models\KwitantieServices;
use Illuminate\Database\Eloquent\Factories\Factory;

class KwitantieServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = KwitantieServices::class;

    public function definition()
    {
        return [
            'kwitantie_id' => Kwitantie::factory(),
            'service_title' => $this->faker->sentence(),
            'service_desc' => $this->faker->catchPhrase(),
            'price' => $this->faker->numberBetween(5, 10000),
        ];
    }
}
