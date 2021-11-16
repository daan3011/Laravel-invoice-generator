<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Factuur;
use Illuminate\Database\Eloquent\Factories\Factory;

class FactuurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

          /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factuur::class;

    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\nl_NL\Company($this->faker));
        return [
            'business_id' => Business::factory(),
            'factuur_number' => $this->faker->numberBetween(23454, 212464796),
            'date' => $this->faker->date(),
            'to' => $this->faker->company(),
        ];
    }
}
