<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebijakanPrivasi extends Model
{
    protected $table="bbn3_kebijakan_privasi";
    protected $fillable = [
        'nama_kebijakan',
        'deskripsi_kebijakan',
    ];
}
