<?php

use App\Models\JenisKelamin;
use App\Models\Simkop\JenisKeanggotaan;
use App\Models\Simkop\StatusKeanggotaan;
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
            $table->integer('jenis_kelamin')->default(JenisKelamin::PRIA); // 1 =laki -laki 2 = Perempuan
            $table->string('pekerjaan')->nullable();
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->char('telepon', 15);
            $table->string('nama_ibu');
            $table->string('photo')->nullable(); // lokasi file foto
            $table->dateTime('tgl_mulai_anggota');
            $table->integer('status_keanggotaan')->default(StatusKeanggotaan::NON_AKTIF); // 1 = aktif
            $table->integer('jenis_keanggotaan')->default(JenisKeanggotaan::ANGGOTA); // 1 = pengurus 2=anggota
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
