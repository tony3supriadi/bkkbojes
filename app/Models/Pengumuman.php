<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'alw2_pengumuman';
    protected $fillable = [
        'link',
        'judul',
        'sub_judul',
        'isi_pengumuman',
        'logo',
        'view',
        'pengumuman'
    ];
}
