<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelQuestionQuestionnariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_question_questionnaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_question');
            $table->unsignedBigInteger('id_questionnarie');
            $table->integer('order');
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
        Schema::dropIfExists('rel_question_questionnaries');
    }
}
