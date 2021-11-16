<?php

namespace Database\Factories;

use App\Models\Factuur;
use App\Models\FactuurServices;
use Illuminate\Database\Eloquent\Factories\Factory;

class FactuurServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = FactuurServices::class;

    public function definition()
    {
        return [
            //
            'factuur_id' => Factuur::factory(),
            'service_title' => $this->faker->sentence(),
            'service_desc' => $this->faker->catchPhrase(),
            'price' => $this->faker->numberBetween(5, 10000),
            'btw_percentage' => $this->faker->numberBetween(21, 21),
        ];
    }
}
