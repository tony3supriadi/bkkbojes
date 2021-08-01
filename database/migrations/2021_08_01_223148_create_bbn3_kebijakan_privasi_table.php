<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbn3KebijakanPrivasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbn3_kebijakan_privasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kebijakan',128);
            $table->text('deskripsi_kebijakan');
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
        Schema::dropIfExists('bbn3_kebijakan_privasi');
    }
}
