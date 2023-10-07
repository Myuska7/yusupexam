<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasMany;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasMany;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
