<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetentuanPenggunaan extends Model
{
    protected $table="bbn2_ketentuan_penggunaan";
    protected $fillable = [
        'nama_ketentuan',
        'deskripsi_ketentuan',
    ];
}
