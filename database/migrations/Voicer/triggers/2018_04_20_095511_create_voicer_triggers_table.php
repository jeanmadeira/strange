<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerTriggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Table for store triggers definitions (case when type is equal to POST than trigger
         * will be started when survey has finished, if type is equal to GET, the trigger will
         * be started when survey was started)
         */
        Schema::create('voicer_triggers', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('summary_id', false, true);
            $table->string('name', 120);
            $table->enum('type', ['get', 'post']);
            $table->text('endpoint');
            $table->integer('user_id', false, true);
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('summary_id')->references('id')->on('voicer_summary')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_triggers');
    }
}
