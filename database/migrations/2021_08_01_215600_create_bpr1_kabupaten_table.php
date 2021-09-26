<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpr1KabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpr1_kabupaten', function (Blueprint $table) {
            $table->id();
            $table->char('kode_kabupaten',4);
            $table->unsignedInteger('provinsi_id');
            $table->string('nama_kabupaten');
            $table->unsignedInteger('wilayah_id');
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
        Schema::dropIfExists('bpr1_kabupaten');
    }
}
