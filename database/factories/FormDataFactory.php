<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'display_name' => $this->faker->text(200),
            'save_data' => $this->faker->numberBetween(0, 1),
            'user_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
