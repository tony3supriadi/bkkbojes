<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlw2PengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alw2_pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('link')->unique();
            $table->string('judul');
            $table->string('sub_judul');
            $table->text('isi_pengumuman')->nullable();
            $table->string('logo')->nullable();
            $table->double('view')->nullable();
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
        Schema::dropIfExists('alw2_pengumuman');
    }
}
