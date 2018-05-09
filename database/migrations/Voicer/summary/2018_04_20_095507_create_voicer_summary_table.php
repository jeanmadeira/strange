<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Survey summaries table (store survey versions)
         */
        Schema::create('voicer_summary', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('survey_id', false, true);
            $table->string('name', 100);
            $table->string('title')->nullable();
            $table->string('slug', 100);
            $table->boolean('has_trigger')->default(0);
            $table->integer('user_id', false, true);
            $table->timestamps();
            $table->softDeletes();

            // Indexes and primary keys
            $table->unique('survey_id');

            // Relationships
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('survey_id')->references('id')->on('voicer_survey')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_summary');
    }
}
