<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdf5OrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdf5_organisasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personal_id');
            $table->string('tahun_mulai',4);
            $table->string('hingga_mulai',4);
            $table->boolean('masih_aktif')->nulable();
            $table->string('posisi_jabatan',64);
            $table->string('nama_organisasi',128);
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
        Schema::dropIfExists('fdf5_organisasi');
    }
}
