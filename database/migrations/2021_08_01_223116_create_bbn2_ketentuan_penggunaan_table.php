<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbn2KetentuanPenggunaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbn2_ketentuan_penggunaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ketentuan',128);
            $table->text('deskripsi_ketentuan');
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
        Schema::dropIfExists('bbn2_ketentuan_penggunaan');
    }
}
