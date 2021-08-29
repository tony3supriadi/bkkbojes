<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Personal extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = "fdf1_personal";

    protected $fillable = [
        'nik',
        'nis',
        'photo',
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

    public function getProfileComplete($id)
    {
        return ceil(
            $this->getPersonalComplete($id) +
                $this->getPengalamanComplete($id) +
                $this->getPendidikanComplete($id) +
                $this->getKeterampilanComplete($id) +
                $this->getOrganisasiComplete($id)
        );
    }

    public function getPersonalComplete($id)
    {
        $precent = 0;
        $data = $this->find($id);

        if ($data->photo) $precent += 1;
        if ($data->nama_depan) $precent += 1;
        if ($data->nama_belakang) $precent += 1;
        if ($data->jenis_kelamin) $precent += 1;
        if ($data->tempat_lahir) $precent += 1;
        if ($data->tanggal_lahir) $precent += 1;
        if ($data->email) $precent += 1;
        if ($data->alamat) $precent += 1;
        if ($data->provinsi) $precent += 1;
        if ($data->kabupaten) $precent += 1;
        if ($data->kecamatan) $precent += 1;
        if ($data->kodepos) $precent += 1;
        if ($data->no_hp) $precent += 1;
        if ($data->nama_pengguna) $precent += 1;
        if ($data->password) $precent += 1;

        return ($precent / 15) * 20;
    }

    public function getPengalamanComplete($id)
    {
        $count = DB::table('fdf2_pengalaman')
            ->where('personal_id', '=', $id)
            ->count();

        if ($count > 0) return 20;
        return 0;
    }

    public function getPendidikanComplete($id)
    {
        $count = DB::table('fdf3_pendidikan')
            ->where('personal_id', '=', $id)
            ->count();

        if ($count > 0) return 20;
        return 0;
    }

    public function getKeterampilanComplete($id)
    {
        $count = DB::table('fdf4_keterampilan')
            ->where('personal_id', '=', $id)
            ->count();

        if ($count > 0) return 20;
        return 0;
    }

    public function getOrganisasiComplete($id)
    {
        $count = DB::table('fdf5_organisasi')
            ->where('personal_id', '=', $id)
            ->count();

        if ($count > 0) return 20;
        return 0;
    }
}
