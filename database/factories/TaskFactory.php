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
            'end_date' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'time_hour' =>  $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'project_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
