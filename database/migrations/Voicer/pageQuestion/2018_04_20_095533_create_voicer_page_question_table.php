<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerPageQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voicer_page_question', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('page_id', false, true);
            $table->bigInteger('question_id', false, true);
            $table->integer('order');
            $table->boolean('has_conditional')->default(0);
            $table->json('conditional_rule')->nullable();
            $table->integer('user_id', false, true);
            $table->timestamps();

            $table->unique(['page_id', 'question_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('page_id')->references('id')->on('voicer_page')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('voicer_question')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_page_question');
    }
}
