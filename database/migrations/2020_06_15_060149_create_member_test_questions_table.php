<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTestQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_test_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('member_test_id');
            $table->foreign('member_test_id')->references('id')->on('member_test');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->unsignedBigInteger('answer_id');
            $table->foreign('answer_id')->references('id')->on('answers');
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
        Schema::dropIfExists('member_test_questions');
    }
}
