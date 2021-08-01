<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table="fdf3_pendidikan";
    protected $fillable = [
        'personal_id',
        'bulan_mulai',
        'tahun_mulai',
        'bulan_selesai',
        'tahun_selesai',
        'masih_sekolah',
        'nama_sekolah',
        'provinsi',
        'kabupaten',
        'jenjang_pendidikan',
        'jurusan',
        'nilai_akhir',
    ];
}
