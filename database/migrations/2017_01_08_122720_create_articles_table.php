<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sort_id')->default(1);
            $table->string('title');
            $table->string('title_color')->nullable();
            $table->string('full_title')->nullable();
            //副标题
            $table->string('subhead')->nullable();
            //简介
            $table->string('intro')->nullable();
            //内容
            $table->text('content');
            $table->string('author')->nullable();
            $table->string('copyfrom')->nullable();
            //关键字
            $table->string('keyword')->nullable();
            $table->integer('hits')->nullable();
            $table->integer('article_status')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
