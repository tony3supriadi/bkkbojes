<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlw1LowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alw1_lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('link')->unique();
            $table->string('nama_lowongan');
            $table->bigInteger('mitra_id');
            $table->string('lokasi');
            $table->string('jenis_pekerjaan')->nullable();
            $table->string('program_studi')->nullable();
            $table->enum('tipe_pekerjaan', ['Magang', 'Full-time', 'Part-time', 'Freelance'])->nullable();
            $table->string('kisaran_gaji')->nullable();
            $table->date('tanggal_berakhir')->nullable();
            $table->text('deskripsi_pekerjaan')->nullable();
            $table->text('kualitas')->nullable();
            $table->text('fasilitas')->nullable();
            $table->text('catatan')->nullable();
            $table->text('informasi_lain')->nullable();
            $table->integer('view')->default(0)->unsigned();
            $table->boolean('publish')->default(false);
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
        Schema::dropIfExists('alw1_lowongan');
    }
}
