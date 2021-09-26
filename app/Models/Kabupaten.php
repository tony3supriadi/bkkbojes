<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $table = 'bpr1_kabupaten';
    protected $fillable = [
        'kode_kabupaten',
        'provinsi_id',
        'nama_kabupaten',
        'wilayah_id',
    ];
}
