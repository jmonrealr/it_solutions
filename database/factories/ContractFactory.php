<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject'=> $this->faker->word(),
            'description' => $this->faker->sentence(),
            'initiated_by' => $this->faker->name(),
            'start_date' => $this->faker->dateTimeBetween('-2 week', '+1 week'),
            'end_date' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'status_id' => $this->faker->numberBetween(1,2),
            'type_contract_id' => $this->faker->numberBetween(1,2),
        ];
    }
}
