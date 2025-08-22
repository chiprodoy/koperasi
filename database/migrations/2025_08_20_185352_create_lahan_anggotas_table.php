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
        Schema::create('lahan_anggotas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Anggota::class);
            $table->double('luas_lahan',null,2,true);
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
        Schema::dropIfExists('lahan_anggotas');
    }
};
