<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
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
            'location' => $this->faker->address(),
            'start_date' => $this->faker->dateTimeBetween('-2 week', '+1 week'),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
