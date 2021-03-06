<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEskulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eskuls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('pengurus');
            $table->string('jadwal');
            $table->UnsignedInteger('prestasi_id');
            $table->foreign('prestasi_id')->references('id')->on('prestasis')->onDelete('cascade');
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
        Schema::dropIfExists('eskuls');
    }
}
