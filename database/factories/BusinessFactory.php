<?php

namespace Database\Factories;
use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BusinessFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Business::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'slogan' => $this->faker->paragraph(),
            'kvk' => Str::random(10),
            'btw' => Str::random(10),
            'logo' => Str::random(10),
        ];
    }
}
