<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdf6PersonalHasSimpanLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdf6_personal_has_simpan_lowongan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lowongan_id');
            $table->bigInteger('personal_id');
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
        Schema::dropIfExists('fdf6_personal_has_simpan_lowongan');
    }
}
