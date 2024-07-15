<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $enrollableType = $this->faker->randomElement([Student::class, Teacher::class]);
        $enrollableId = $enrollableType::factory()->create()->id;

        return [
            'course_id' => Course::factory(),
            'enrollable_id' => $enrollableId,
            'enrollable_type' => $enrollableType,
        ];
    }
}
