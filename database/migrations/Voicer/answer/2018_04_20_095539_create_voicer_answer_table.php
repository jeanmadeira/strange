<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Table for store answers for questions
         */
        Schema::create('voicer_answer', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('question_id', false, true);
            $table->enum('type', ['boolean', 'radio', 'text', 'checkbox', 'textarea', 'date']);
            $table->text('label');
            $table->text('value')->nullable();
            $table->integer('user_id', false, true);
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('voicer_answer');
    }
}
