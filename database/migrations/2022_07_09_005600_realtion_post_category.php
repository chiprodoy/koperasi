<?php

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RealtionPostCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_post_category', function (Blueprint $table) {
            $table->foreignIdFor(Post::class);
            $table->foreignIdFor(PostCategory::class);
            $table->string('user_modify');

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
