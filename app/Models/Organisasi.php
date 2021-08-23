<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $table = "fdf5_organisasi";
    protected $fillable = [
        'personal_id',
        'tahun_mulai',
        'tahun_berakhir',
        'masih_aktif',
        'posisi_jabatan',
        'nama_organisasi',
    ];
}
