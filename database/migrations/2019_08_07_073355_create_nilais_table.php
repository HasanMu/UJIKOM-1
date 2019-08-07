<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unignedBigInteger('siswa_id');
            $table->unsgnedBigInteger('guru_id');
            $table->unsignedBigInteger('SK_id');
            $table->integer('nilai_angka');
            $table->string('nilai_huruf');

            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('guru_id')->references('id')->on('gurus');
            $table->foreign('SK_id')->references('id')->on('standar_kompetensis');
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
        Schema::dropIfExists('nilais');
    }
}
