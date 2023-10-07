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
        'name',
        'username',
        'password'
    ];

    protected  $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];


    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
