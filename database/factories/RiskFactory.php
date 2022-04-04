<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RiskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'solution' => $this->faker->sentence(),
        ];
    }
}
