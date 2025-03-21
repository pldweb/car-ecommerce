<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Brand extends Authenticatable
{

    protected $table = 'brand';
    protected $fillable = [
        'nama',
        'created_at',
        'updated_at',
    ];
}
