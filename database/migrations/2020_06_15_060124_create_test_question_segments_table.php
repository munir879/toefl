<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question_segments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->unsignedBigInteger('question_segment_id');
            $table->foreign('question_segment_id')->references('id')->on('question_segments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_question_segments');
    }
}
