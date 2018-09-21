<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->tinyInteger('type');
            $table->integer('category_id');
            $table->string('thumb_url');
            $table->string('share_url');
            $table->string('original_link');
            $table->string('title');
            $table->string('description');
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->string('meta_keyword');
            $table->text('content');
            $table->tinyInteger('status');
            $table->tinyInteger('is_comment');
            $table->tinyInteger('comment_type');
            $table->integer('views');
            $table->integer('comments');
            $table->integer('user_id');
            $table->integer('user_approve_id');
            $table->string('link_video');
            //$table->timestamps('ptime');
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
        Schema::dropIfExists('posts');
    }
}
