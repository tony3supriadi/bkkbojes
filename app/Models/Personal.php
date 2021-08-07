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
        'photo',
        'photo_dir',
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
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
