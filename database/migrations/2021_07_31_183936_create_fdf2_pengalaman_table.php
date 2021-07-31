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
            $table->date('tanggalmulai')->nullable();
            $table->date('tanggalselesai')->nullable();
            $table->boolean('sampaisekarang')->nullable();
            $table->string('bekerjasebagai',64);
            $table->string('namaperusahaan',64);
            $table->string('alamat',64)->nullable();
            $table->string('provinsi',64)->nullable();
            $table->string('kabupaten',64)->nullable();
            $table->string('kecamatan',64)->nullable();
            $table->string('desa',64)->nullable();
            $table->string('kodepos',64)->nullable();
            $table->string('bidangusaha',64)->nullable();
            $table->string('jabatan',64);
            $table->string('bidangpekerjaan',64);
            $table->double('gaji',8,2)->nullable();
            $table->text('deskripsipekerjaan')->nullable();
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
