<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalHasSimpanLowongan extends Model
{
    use HasFactory;
    protected $table = 'fdf7_personal_has_kirim_lowongan';
    protected $fillable = [
        'lowongan_id',
        'personal_id',
    ];
}
