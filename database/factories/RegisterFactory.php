<?php

namespace Database\Factories;

use App\Models\Register;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $student = DB::table('students')->inRandomOrder()->first();
       $course = DB::table('courses')->inRandomOrder()->first();
       $clasrooms = DB::table('clasrooms')->inRandomOrder()->first();
       return [
           'student_id' => $student->id,
           'course_id' => $course->id,
           'classroom_id' => $clasroom->id,
       ];
    }
}
