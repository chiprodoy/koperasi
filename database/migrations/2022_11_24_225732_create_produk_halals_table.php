<?php

use App\Models\JenisProduk;
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
        Schema::create('produk_halals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('pelaku_usaha');
            $table->foreignIdFor(JenisProduk::class);
            $table->string('nmr_kh_mui'); // nomor ketetapan halal mui
            $table->date('masaberlaku_kh_mui'); // massa berlaku ketetapan halal mui
            $table->string('nmr_sertifikat_mui'); // nomor ketetapan halal mui
            $table->date('masaberlaku_sertifikat_mui'); // massa berlaku ketetapan halal mui
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
        Schema::dropIfExists('produk_halals');
    }
};
