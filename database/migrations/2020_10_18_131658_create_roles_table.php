<?php

use Laravel\MF\CostumDbMigration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    use CostumDbMigration;

    public $tb='roles';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {
            Schema::create($this->tb, function (Blueprint $table) {
                $table->id();
                $table->string('role_name')->unique();
            });
            if(method_exists($this,'powerup')) $this->powerup();

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
