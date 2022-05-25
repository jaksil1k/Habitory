<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "user_id" => $this->faker->numberBetween(1, 10),
            'quantity' => $this-> faker->numberBetween(1, 7),
            'goal' => $this->faker->text(),
            'days' => $this->faker->numberBetween(1, 366)
        ];
    }
}
