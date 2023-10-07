<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasMany;
use Illuminate\Database\Eloquent\Factories\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    public function clasroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
