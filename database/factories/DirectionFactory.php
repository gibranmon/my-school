<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direction>
 */
class DirectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'line_one' => $this->faker->streetAddress,
            'line_two' => $this->faker->secondaryAddress,
            'postal_code' => $this->faker->postcode,
            'state' => $this->faker->state,
        ];
    }
}
