<?php

use App\Models\File;
use App\Models\FileCategory;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RealtionFileCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_category_file', function (Blueprint $table) {
            $table->foreignIdFor(File::class);
            $table->foreignIdFor(FileCategory::class);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
