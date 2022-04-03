<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModelsFactory extends Factory
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
            'type_models_id' => $this->faker->numberBetween(1,3),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
