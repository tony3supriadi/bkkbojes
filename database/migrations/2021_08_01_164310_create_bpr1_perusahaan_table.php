<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpr1PerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpr1_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('namaperusahaan',64);
            $table->string('bidangusaha',64);
            $table->string('lokasikabupaten',64);
            $table->enum('jenisbadanusaha',['BUMN','Swasta','Asing']);
            $table->string('bentukusaha',64)->nullable();
            $table->string('jumlahkaryawan',32)->nullable();
            $table->string('busanakerja',64)->nullable();
            $table->string('waktukerja',64)->nullable();
            $table->string('kontak',255)->nullable();
            $table->string('telepon',16)->nullable();
            $table->string('website',64)->nullable();
            $table->string('email',64)->nullable();
            $table->text('profilperusahaan')->nullable();
            $table->string('logo',64)->nullable();
            $table->string('imageslideshow',64)->nullable();
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
        Schema::dropIfExists('bpr1_perusahaan');
    }
}
