<?php

use App\Models\Simkop\Anggota;
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
        Schema::create('hasil_panens', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignIdFor(Anggota::class);
            $table->date('tgl_panen');
            $table->double('jumlah_hasil_panen');
            $table->double('luas_lahan');
            $table->double('harga_per_kg');
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
        Schema::dropIfExists('hasil_panens');
    }
};
