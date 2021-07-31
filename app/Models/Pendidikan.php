<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table="fdf3_pendidikan";
    protected $fillable = [
        'personal_id',
        'bulanmulai',
        'tahunmulai',
        'bulanselesai',
        'tahunselesai',
        'almamater',
        'provinsi',
        'kabupaten',
        'jenjangpendidikan',
        'jurusan',
        'nilaitertinggi',
    ];
}
