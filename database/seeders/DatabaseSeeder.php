<?php

namespace Database\Seeders;

use App\Models\Direction;
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

        Student::factory()->count(10)->create()->each(function ($student) {
            $student->direction()->save(Direction::factory()->make());
        });

        Teacher::factory()->count(5)->create()->each(function ($teacher) {
            $teacher->direction()->save(Direction::factory()->make());
        });

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
