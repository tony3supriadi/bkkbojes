<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table = "fdf2_pengalaman";
    protected $fillable = [
        'personal_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'masih_bekerja',
        'bekerja_sebagai',
        'nama_perusahaan',
        'alamat',
        'negara',
        'provinsi',
        'kabupaten',
        'bidang_usaha',
        'jabatan',
        'bidang_pekerjaan',
        'gaji_prefix',
        'gaji',
        'deskripsi_pekerjaan',
        'tools',
    ];
}
