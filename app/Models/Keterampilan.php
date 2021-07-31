<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    protected $table="fdf4_keterampilan";
    protected $fillable = [
        'personal_id',
        'keterampilankomputer',
        'keterampilanlain',
    ];
}
