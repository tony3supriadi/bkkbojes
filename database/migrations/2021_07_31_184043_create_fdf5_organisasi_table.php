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
            $table->string('tahun_mulai', 4)->nullable();
            $table->string('tahun_berakhir', 4)->nullable();
            $table->boolean('masih_aktif')->nullable();
            $table->string('posisi_jabatan', 64)->nullable();
            $table->string('nama_organisasi', 128)->nullable();
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
