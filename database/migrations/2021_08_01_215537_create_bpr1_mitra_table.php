<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpr1MitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpr1_mitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mitra',64);
            $table->string('bidang_usaha',64);
            $table->string('lokasi_kabupaten',64);
            $table->enum('jenis_badan_usaha',['BUMN','Swasta','Asing']);
            $table->string('bentuk_usaha',64)->nullable();
            $table->string('jumlah_karyawan',32)->nullable();
            $table->string('busana_kerja',64)->nullable();
            $table->string('waktu_kerja',64)->nullable();
            $table->string('kontak',255)->nullable();
            $table->string('telepon',16)->nullable();
            $table->string('website',64)->nullable();
            $table->string('email',64)->nullable();
            $table->text('profil_perusahaan')->nullable();
            $table->string('logo',64)->nullable();
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
        Schema::dropIfExists('bpr1_mitra');
    }
}
