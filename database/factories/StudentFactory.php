<?php

namespace Database\Factories;

use App\Models\Register;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\name;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $classroom = DB::table('classrooms')->inRandomOrder()->first();
        $course = DB::table('course')->inRandomOrder()->first();
        $name = fake()->unique()->streetName();
        return [
            'student_id' => $student->id,
            'first_name' => $first->name,
            'last_name' => $last->name,
            'birthday' => fake()->randomNumber(6),
        ];
    }
}
