<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdf1PersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdf1_personal', function (Blueprint $table) {
            $table->id();
            $table->string('nik',16)->nullable();
            $table->string('nis',32)->nullable();
            $table->string('nama_depan',64);
            $table->string('nama_belakang',64);
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan'])->nullable();
            $table->string('tempat_lahir',64)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('email',128)->unique();
            $table->string('alamat',64)->nullable();
            $table->string('provinsi',64)->nullable();
            $table->string('kabupaten',64)->nullable();
            $table->string('kecamatan',64)->nullable();
            $table->string('desa',64)->nullable();
            $table->string('kodepos',8)->nullable();
            $table->string('no_hp',16);
            $table->string('nama_pengguna',64)->unique();
            $table->enum('jenis_akun',['Siswa','Alumni','Umum'])->nullable();
            $table->string('kata_sandi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fdf1_personal');
    }
}
