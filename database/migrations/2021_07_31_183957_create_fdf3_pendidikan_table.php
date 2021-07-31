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
            $table->string('bulanmulai',2);
            $table->string('tahunmulai',4);
            $table->string('bulanselesai',2);
            $table->string('tahunselesai',4);
            $table->string('almamater',128);
            $table->string('provinsi',64)->nullable();
            $table->string('kabupaten',64)->nullable();
            $table->string('jenjangpendidikan',32)->nullable();
            $table->string('jurusan',64)->nullable();
            $table->decimal('nilaitertinggi',8,2)->nullable();
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
