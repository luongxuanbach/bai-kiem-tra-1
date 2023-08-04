<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MotorcyclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make' => $this->faker->words(2, true),
            'year' => $this->faker->numberBetween(2000, 2023),
            'model' => $this->faker->words(5, true),
            'vin' => sprintf(
                '%s-%s %s', 
                $this->faker->numberBetween(10, 50),
                \Str::upper(\Str::random(1)) . $this->faker->numberBetween(1, 9),
                $this->faker->numberBetween(10000, 50000)
            )
        ];
    }
}
