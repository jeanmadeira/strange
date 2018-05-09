<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Questions table
         */
        Schema::create('voicer_question', function (Blueprint $table) {
            // Table structure
            $table->bigIncrements('id');
            $table->text('label');
            $table->integer('order');
            $table->enum('type', ['boolean','unique', 'label', 'text', 'multi', 'matriz', 'nps', 'npsProduct', 'rating', 'feeling', 'comment', 'date']);
            $table->boolean('is_required')->default(0);
            $table->bigInteger('related_question_id', false, true)->nullable();
            $table->integer('user_id', false, true);
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            $table->foreign('related_question_id')->references('id')->on('voicer_question')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voicer_question');
    }
}
