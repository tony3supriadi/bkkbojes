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
            $table->string('tahunmulai',4);
            $table->string('hinggamulai',4);
            $table->string('posisijabatan',64);
            $table->string('namaorganisasi',128);
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
