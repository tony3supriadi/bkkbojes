<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    protected $table = "bpt3_copyright";
    protected $fillable = [
        'situs_dikelola',
        'hak_cipta',
    ];
}
