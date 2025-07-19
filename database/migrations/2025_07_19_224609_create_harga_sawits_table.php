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
        Schema::create('harga_sawits', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('nama_perusahaan');
            $table->date('tgl_update_harga');
            $table->double('harga',null,3,true);
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
        Schema::dropIfExists('harga_sawits');
    }
};
