<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerRespondentParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Table for store parameter values for each respondent
         */
        Schema::create('voicer_respondent_params', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('respondent_id', false, true);
            $table->bigInteger('param_id', false, true);
            $table->string('value');
            $table->timestamps();

            // Indexes and primary keys
            $table->unique(['respondent_id', 'param_id']);

            // Relationships
            $table->foreign('respondent_id')->references('id')->on('voicer_respondents');
            $table->foreign('param_id')->references('id')->on('voicer_collector_params');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_respondent_params');
    }
}
