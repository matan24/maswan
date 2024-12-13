<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasKaryawanStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mas_karyawan_staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik_ms')->unique();
            $table->string('npwp');
            $table->string('nama');
            $table->string('lahir');
            $table->string('ttl');
            $table->string('umur');
            $table->string('gender');
            $table->string('status_karyawan');
            $table->string('pkwt');
            $table->string('pkwtt');
            $table->string('tmk');
            $table->string('jabatan');
            $table->string('domisili');
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('status_pernikahan');
            $table->string('jml_anak');
            $table->string('wp');
            $table->string('bpjs_kesehatan');
            $table->string('bpjs_kerja');
            $table->string('cv');
            $table->string('ktp');
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
        Schema::dropIfExists('mas_karyawan_staff');
    }
}
