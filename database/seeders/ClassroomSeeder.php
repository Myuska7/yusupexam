<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            ['name' => 'A1'],
            ['name' => 'A2'],
            ['name' => 'B1'],
            ['name' => 'C1'],
            ['name' => 'C3']
        ];

        foreach ($classrooms as $classroom) {
            $obj = Classroom::create([
                'name' => $classroom['name'],
            ]);
        }
    }
}
