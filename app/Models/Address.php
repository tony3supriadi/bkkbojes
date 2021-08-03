<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "bpt2_address";
    protected $fillable = [
        'nama',
        'alamat',
        'logo',
    ];
}
