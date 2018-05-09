<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerCollectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Table for store collectors (methods for collect survey responses)
         */
        Schema::create('voicer_collectors', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->bigInteger('summary_id', false, true);
            $table->string('name', 100);
            $table->enum('type', ['link', 'email', 'api']);
            $table->string('hash', 32);
            $table->boolean('has_dynamicquestions')->default(0);
            $table->timestamp('available_in')->nullable();
            $table->timestamp('expires_in')->nullable();
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
        Schema::dropIfExists('voicer_collectors');
    }
}
