<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('siswa_NISN')->unique();
            $table->unsignedBigInteger('kompetensi_id');
            $table->string('siswa_nama');
            $table->text('siswa_alamat');
            $table->date('siswa_tgl_lahir');
            $table->string('foto')->nullable();

            $table->foreign('kompetensi_id')->references('id')->on('kompetensi_keahlians');
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
        Schema::dropIfExists('siswas');
    }
}
