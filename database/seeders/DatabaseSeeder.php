<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClassroomSeeder::class,
            CourseSeeder::class,
        ]);
        \App\Models\Student::factory(20)->create();
        \App\Models\Register::factory(3)->create();
    }
}
