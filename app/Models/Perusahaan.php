<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table="bpr1_perusahaan";
    protected $fillable = [
        'namaperusahaan',
        'bidangusaha',
        'lokasikabupaten',
        'jenisbadanusaha',
        'bentukusaha',
        'jumlahkaryawan',
        'busanakerja',
        'waktukerja',
        'kontak',
        'telepon',
        'website',
        'email',
        'profilperusahaan',
        'logo',
        'imageslideshow',
    ];
}
