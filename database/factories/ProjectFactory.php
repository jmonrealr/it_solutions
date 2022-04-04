<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
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
            'start_date' => $this->faker->dateTimeBetween('-2 week', '+1 week'),
            'end_date' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'cost_hour' => $this->faker->randomFloat(2, 20, 100),
            'total_cost' => $this->faker->randomFloat(2, 20, 100),
            'customer_id' => $this->faker->numberBetween(1,3),
            'contract_id' => $this->faker->numberBetween(1,2),
            //'total_time' => $this->faker->numberBetween(50,100),
            //'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
