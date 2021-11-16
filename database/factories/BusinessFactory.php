<?php

namespace Database\Factories;
use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Provider\nl_BE\Person;
use Faker\Provider\nl_NL\Company;

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
        //$btwFaker = Factory::create("nl_NL");
        //$kvkFaker = Factory::create("nl_BE");
        $this->faker->addProvider(new \Faker\Provider\nl_BE\Person($this->faker));
        $this->faker->addProvider(new \Faker\Provider\nl_NL\Company($this->faker));
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->company(),
            'slogan' => $this->faker->catchPhrase(),
            'adress' => $this->faker->address(),
            'zip_code' => $this->faker->postcode(),
            'kvk' => $this->faker->rrn("female"),
            'btw' => $this->faker->btw(),
            'logo' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
