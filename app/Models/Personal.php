<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Personal extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'kata_sandi',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
