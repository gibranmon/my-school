<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'professional_license' => $this->faker->unique()->numerify('########'),
            'phone_number' => $this->faker->regexify('[0-9]{10}'),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
