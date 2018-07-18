<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_question');
            $table->foreign('id_question')->references('id')->on('questions');
            $table->unsignedBigInteger('id_store');
            $table->foreign('id_store')->references('id')->on('stores');
            $table->string('answer');
            $table->integer('score');
            $table->dateTime('survey_date');
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
        Schema::dropIfExists('surveys');
    }
}
