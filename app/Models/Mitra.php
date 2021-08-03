<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table="bpr1_mitra";
    protected $fillable = [
        'nama_mitra',
        'bidang_usaha',
        'lokasi_kabupaten',
        'jenis_badan_usaha',
        'bentuk_usaha',
        'jumlah_karyawan',
        'busana_kerja',
        'waktu_kerja',
        'kontak',
        'telepon',
        'website',
        'email',
        'profil_perusahaan',
        'logo',
    ];
}
