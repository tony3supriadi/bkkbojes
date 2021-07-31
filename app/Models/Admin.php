<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "bpg1_admin";

    protected $fillable = [
        'nama',
        'username',
        'password',
        'email',
        'level',
    ];

    protected $hidden = [
        'password'
    ];
}
