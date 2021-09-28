<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalHasKirimLowongan extends Model
{
    use HasFactory;
    protected $table = 'fdf6_personal_has_simpan_lowongan';
    protected $fillable = [
        'lowongan_id',
        'personal_id',
    ];
}
