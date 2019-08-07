<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaliMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_murids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unignedBigInteger('siswa_id');
            $table->string('wali_nama_ayah');
            $table->string('wali_pekerjaan_ayah');
            $table->string('wali_nama_ibu');
            $table->string('wali_pekerjaan_ibu');
            $table->text('wali_alamat');
            $table->string('wali_telepon');

            $table->foreign('siswa_id')->references('id')->on('siswas');
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
        Schema::dropIfExists('wali_murids');
    }
}
