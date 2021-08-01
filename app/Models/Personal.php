<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table="fdf1_personal";
    protected $fillable = [
        'nik',
        'nis',
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'kodepos',
        'no_hp',
        'nama_pengguna',
        'jenis_akun',
        'kata_sandi',
    ];
}
