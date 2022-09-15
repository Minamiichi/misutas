<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('nisn');
            $table->string('nama_siswa');
            $table->string('nis');
            $table->bigInteger('id_kelas');
            $table->string('ttl');
            $table->string('jk');
            $table->string('agama');
            $table->string('status_keluarga')->nullable();
            $table->string('anak_ke');
            $table->text('alamat_siswa');
            $table->string('no_telp');
            $table->string('sekolah_asal');
            $table->string('tgl_terima');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->text('alamat_ortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaaan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('photo_url');

            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
}
