<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionSegmentArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question_segment_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_question_segment_id');
            $table->foreign('test_question_segment_id')->references('id')->on('test_question_segments');
            $table->unsignedBigInteger('article_id')->default(null);
            $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_question_segment_articles');
    }
}
