<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('attachment')->nullable();
            $table->string('cover')->nullable();
            $table->string('tags')->nullable();
            $table->integer('view_count')->default(0)->unsigned();
            $table->integer('like_count')->default(0)->unsigned();
            $table->integer('share_count')->default(0)->unsigned();
            $table->string('post_status'); // draft,publish
            $table->string('post_type'); // blog,page,multimedia
            $table->string('slug');
            $table->uuid();
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
        Schema::dropIfExists('posts');
    }
}
