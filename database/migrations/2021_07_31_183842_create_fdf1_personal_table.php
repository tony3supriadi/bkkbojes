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
            $table->string('namadepan',64);
            $table->string('namabelakang',64);
            $table->enum('jeniskelamin',['Laki-laki','Perempuan'])->nullable();
            $table->string('tempatlahir',64)->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('email',128)->unique();
            $table->string('alamat',64)->nullable();
            $table->string('provinsi',64)->nullable();
            $table->string('kabupaten',64)->nullable();
            $table->string('kecamatan',64)->nullable();
            $table->string('desa',64)->nullable();
            $table->string('kodepos',8)->nullable();
            $table->string('nohp',16);
            $table->string('namapengguna',64)->unique();
            $table->enum('jenisakun',['Siswa','Alumni','Umum'])->nullable();
            $table->string('sandi');
            $table->string('ulangsandi');
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
