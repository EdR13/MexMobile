<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone_id' => $this->faker->numberBetween(1,6),
            'user_id' => $this->faker->numberBetween(2,5),
        ];
    }
}
