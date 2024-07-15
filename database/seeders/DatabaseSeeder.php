<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Direction;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $students = Student::factory()->count(10)->create()->each(function ($student) {
            $student->direction()->save(Direction::factory()->make());
        });

        $teachers = Teacher::factory()->count(5)->create()->each(function ($teacher) {
            $teacher->direction()->save(Direction::factory()->make());
        });

        $courses = Course::factory(5)->create();

        // Asignar cursos a estudiantes y maestros
        foreach ($courses as $course) {
            // Asignar a 3 estudiantes
            for ($i = 0; $i < 3; $i++) {
                Enrollment::factory()->create([
                    'course_id' => $course->id,
                    'enrollable_id' => $students->random()->id,
                    'enrollable_type' => Student::class,
                ]);
            }

            // Asignar a 1 maestro
            Enrollment::factory()->create([
                'course_id' => $course->id,
                'enrollable_id' => $teachers->random()->id,
                'enrollable_type' => Teacher::class,
            ]);
        }

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
