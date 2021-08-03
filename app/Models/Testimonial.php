<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = "bbk2_testimonial";
    protected $fillable = [
        'personal_id',
        'nama',
        'jenis_akun',
        'tahun',
        'status',
        'detail_status',
        'deskripsi_testimoni',
    ];
}
