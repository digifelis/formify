<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class MessageListFactory extends Factory
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
            'data' => $this->faker->text(200),
            'form_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
