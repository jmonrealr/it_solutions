<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->word(),
            'description' => $this->faker->sentence(),
            'start_date' => $this->faker->dateTimeBetween('-2 week', '+1 week'),
            'end_date' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'time_hour' =>  $this->faker->time(),
            'user_id' => $this->faker->numberBetween(1, 10),
            'project_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
