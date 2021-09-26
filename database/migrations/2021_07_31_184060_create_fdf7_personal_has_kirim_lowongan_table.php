<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdf7PersonalHasKirimLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdf7_personal_has_kirim_lowongan', function (Blueprint $table) {
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
        Schema::dropIfExists('fdf7_personal_has_kirim_lowongan');
    }
}
