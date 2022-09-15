<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationsOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutations_out', function (Blueprint $table) {
            $table->id();
            $table->string('id_nisn');
            $table->string('nama');
            $table->string('kelas');
            $table->string('sekolah_tujuan');
            $table->text('alasan_mutasi');
            $table->date('tgl_mutasi');
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
        Schema::dropIfExists('mutations_out');
    }
}
