<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionSegmentArticleQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question_segment_article_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_question_segment_article_id');
            $table->foreign('test_question_segment_article_id', 'test_question_segment_article_id')->references('id')->on('test_question_segment_articles');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->integer('score')->default(null);
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
        Schema::dropIfExists('test_question_segment_article_questions');
    }
}
