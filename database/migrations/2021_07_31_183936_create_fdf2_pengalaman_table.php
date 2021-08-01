<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdf2PengalamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdf2_pengalaman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personal_id');
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->boolean('masih_bekerja')->nullable();
            $table->string('bekerja_sebagai',64);
            $table->string('nama_perusahaan',64);
            $table->string('alamat',64)->nullable();
            $table->string('negara',32)->nullable();
            $table->string('provinsi',64)->nullable();
            $table->string('kabupaten',64)->nullable();
            $table->string('bidang_usaha',64)->nullable();
            $table->string('jabatan',64);
            $table->string('bidang_pekerjaan',64);
            $table->string('gaji_prefix',8);
            $table->double('gaji',8,2)->nullable();
            $table->text('deskripsi_pekerjaan')->nullable();
            $table->text('tools')->nullable();
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
        Schema::dropIfExists('fdf2_pengalaman');
    }
}
