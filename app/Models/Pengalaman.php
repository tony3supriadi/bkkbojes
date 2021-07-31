<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table="fdf2_pengalaman";
    protected $fillable = [
        'personal_id',
        'tanggalmulai',
        'tanggalselesai',
        'sampaisekarang',
        'bekerjasebagai',
        'namaperusahaan',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'kodepos',
        'bidangusaha',
        'jabatan',
        'bidangpekerjaan',
        'gaji',
        'deskripsipekerjaan',
        'tools',
    ];
}
