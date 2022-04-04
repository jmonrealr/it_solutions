<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'paternal_last_name' => $this->faker->name(),
            'phone_number' => $this->faker->regexify('834[0-9]{7}'),
            'age' => $this->faker->numberBetween(20,30),
            //'user_id' => $,
        ];
    }
}
