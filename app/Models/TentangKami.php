<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    protected $tables="bbk1_tentang_kami";
    protected $fillable = [
        'tentang_kami',
        'deskripsi_tentang_kami',
    ];
}
