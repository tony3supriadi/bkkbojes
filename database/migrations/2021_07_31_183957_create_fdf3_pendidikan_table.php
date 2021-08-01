<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdf3PendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdf3_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personal_id');
            $table->string('bulan_mulai',2);
            $table->string('tahun_mulai',4);
            $table->string('bulan_selesai',2);
            $table->string('tahun_selesai',4);
            $table->boolean('masih_sekolah',)->nullable();
            $table->string('nama_sekolah',128);
            $table->string('provinsi',64)->nullable();
            $table->string('kabupaten',64)->nullable();
            $table->string('jenjang_pendidikan',32)->nullable();
            $table->string('jurusan',64)->nullable();
            $table->decimal('nilai_akhir',8,2)->nullable();
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
        Schema::dropIfExists('fdf3_pendidikan');
    }
}
