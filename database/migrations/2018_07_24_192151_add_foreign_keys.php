<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('surveys', function (Blueprint $table) {
            $table->foreign('id_store')->references('id')->on('stores');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('id_question')->references('id')->on('questions');
        });

        Schema::table('rel_question_questionnaries', function (Blueprint $table) {
            $table->foreign('id_question')->references('id')->on('questions');
            $table->foreign('id_questionnarie')->references('id')->on('questionnaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
