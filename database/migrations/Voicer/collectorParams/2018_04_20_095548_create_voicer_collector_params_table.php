<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerCollectorParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Table for store params for survey collectors
         */
        Schema::create('voicer_collector_params', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('collector_id', false, true);
            $table->string('name', 50);
            $table->integer('user_id', false, true);
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('collector_id')->references('id')->on('voicer_collectors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_collector_params');
    }
}
