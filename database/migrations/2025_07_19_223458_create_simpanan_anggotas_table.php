<?php

use App\Models\Anggota;
use App\Models\JenisSimpanan;
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
        Schema::create('simpanan_anggotas', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignIdFor(Anggota::class);
            $table->foreignIdFor(JenisSimpanan::class); // 1 = wajib, 2 = simpanan wajib, 3 = simpanan sukarela
            $table->dateTime('tgl_simpanan');
            $table->double('jumlah_simpanan');
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
        Schema::dropIfExists('simpanan_anggotas');
    }
};
