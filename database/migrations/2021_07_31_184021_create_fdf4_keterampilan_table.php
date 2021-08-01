<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdf4KeterampilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdf4_keterampilan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personal_id');
            $table->string('skill',128);
            $table->tinyInteger('prosentase',);
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
        Schema::dropIfExists('fdf4_keterampilan');
    }
}
