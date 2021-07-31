<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpg1AdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpg1_admin', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 64);
            $table->string('username', 64)->unique();
            $table->string('password');
            $table->string('email', 128)->unique();
            $table->enum('level', ['Super Admin', 'Admin'])->nullable();
            $table->boolean('isadmin')->default(true);
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
        Schema::dropIfExists('bpg1_admin');
    }
}
