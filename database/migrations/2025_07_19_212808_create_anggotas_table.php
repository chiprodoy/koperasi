<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('nomor_anggota')->unique();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->integer('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->char('telepon', 12);
            $table->string('nama_ibu');
            $table->date('tgl_mulai_anggota');
            $table->integer('status_keanggotaan'); // 1 = aktif
            $table->integer('jenis_keanggotaan'); // 1 = pengurus 2=anggota
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
};
