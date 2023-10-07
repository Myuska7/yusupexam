<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasMany;
use Illuminate\Foundation\Auth\Register as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model\HasFactory;

class Register extends Authenticable
{
    use HasFactory, HasMany, HasApiTokens,Notifiable;

    protected $fillable = [
        'id',
        'name'
    ];



    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
