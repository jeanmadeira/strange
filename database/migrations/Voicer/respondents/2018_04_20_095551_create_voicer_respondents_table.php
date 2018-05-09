<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerRespondentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Table for store respondents for each collector
         */
        Schema::create('voicer_respondents', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('collector_id', false, true);
            $table->string('phpsessionid', 52);
            $table->string('ip');
            $table->enum('state', ['partial', 'completed'])->default('partial');
            $table->timestamps();

            // Indexes and primary keys
            $table->unique(['collector_id', 'phpsessionid']);

            // Relationships
            $table->foreign('collector_id')->references('id')->on('voicer_collectors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_respondents');
    }
}
