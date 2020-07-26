<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_segments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_segment_id');
            $table->foreign('test_segment_id')->references('id')->on('test_segments')->onDelete('cascade');
            $table->text('direction');
            $table->integer('question_quota');
            $table->integer('article_quota');
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
        Schema::dropIfExists('question_segments');
    }
}
