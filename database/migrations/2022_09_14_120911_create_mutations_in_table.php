<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationsInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutations_in', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_masuk');
            $table->string('nisn');
            $table->string('nama_siswa');
            $table->string('ttl');
            $table->text('jk');
            $table->string('asal_sekolah');
            $table->string('jenis_pendaftaran');
            $table->text('alamat');
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
        Schema::dropIfExists('mutations_in');
    }
}
