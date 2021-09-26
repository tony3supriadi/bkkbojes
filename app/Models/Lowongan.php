<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'alw1_lowongan';
    protected $fillable = [
        'nama_lowongan',
        'mitra_id',
        'lokasi',
        'jenis_pekerjaan',
        'program_studi',
        'tipe_pekerjaan',
        'kiasaran_gaji',
        'tanggal_berakhir',
        'deskripsi_pekerjaan',
        'kualitas',
        'fasilitas',
        'catatan',
        'informasi_lain',
        'view',
    ];

}
