<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbk2TestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbk2_testimonial', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personal_id');
            $table->string('nama',64);
            $table->enum('jenis_akun',['Siswa','Alumni','Umum']);
            $table->boolean('tahun')->nullable();
            $table->enum('status',['Sekolah','Bekerja',]);
            $table->string('detail_status',64);
            $table->text('deskripsi_testimonial');
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
        Schema::dropIfExists('bbk2_testimonial');
    }
}
