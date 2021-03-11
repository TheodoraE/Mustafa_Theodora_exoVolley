<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use PharIo\Manifest\Email;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'lastname' => $this->faker->lastName(),
            // 'firstname' => $this->faker->firstName(),
            // 'age' => $this->faker->numberBetween(18,35),
            // 'phone' => $this->faker->phoneNumber(),
            // 'email' => $this->faker->email(),
            // 'country_origin' => $this->faker->country,
        ];
    }
}
