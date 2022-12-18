<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreatePermissionsTable extends Migration
{
    use CostumDbMigration;
    public $tb='permissions';
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
                $table->string('permission_name');//create,edit,delete,update etc
                $table->string('mod_name');//nama model;

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
        Schema::dropIfExists('permissions');
    }
}
