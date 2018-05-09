<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerRespondentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Table for store responses results for each respondent
         */
        Schema::create('voicer_respondent_results', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('respondent_id', false, true);
            $table->bigInteger('question_id', false, true);
            $table->bigInteger('dynamicquestion_id')->unsigned()->nullable();
            $table->bigInteger('answer_id', false, true);
            $table->text('value');
            $table->timestamps();

            // Indexes and primary keys
            $table->unique(['respondent_id', 'question_id', 'answer_id'], 'voicer_respondent_results_unique_index');

            // Relationships,
            $table->foreign('respondent_id')->references('id')->on('voicer_respondents');
            $table->foreign('question_id')->references('id')->on('voicer_question');
            $table->foreign('answer_id')->references('id')->on('voicer_answer');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_respondent_results');
    }
}
