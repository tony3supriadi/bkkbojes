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
        'namadepan',
        'namabelakang',
        'jeniskelamin',
        'tempatlahir',
        'tanggallahir',
        'email',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'kodepos',
        'nohp',
        'namapengguna',
        'jenisakun',
        'sandi',
        'ulangsandi',
    ];
}
