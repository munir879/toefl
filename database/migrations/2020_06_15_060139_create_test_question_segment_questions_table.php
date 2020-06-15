<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionSegmentQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question_segment_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_question_segment_id');
            $table->foreign('test_question_segment_id')->references('id')->on('test_question_segments');
            $table->unsignedBigInteger('question_id')->default(null);
            $table->foreign('question_id')->references('id')->on('questions');
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
        Schema::dropIfExists('test_question_segment_questions');
    }
}
