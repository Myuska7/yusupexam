<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\BelongsTo;

class Student extends Model
{
    use HasMany;

    protected $guarded = ['id'];


    public function register(): BelongsTo
    {
        return $this->belongsTo(Register::class);
    }


    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }


    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
