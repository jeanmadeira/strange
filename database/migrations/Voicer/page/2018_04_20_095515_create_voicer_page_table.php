<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicerPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voicer_page', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 32);
            $table->string('description', 200)->nullable();
            $table->string('slug', 32);
            $table->integer('order');
            $table->boolean('is_random')->default(0);
            $table->integer('user_id', false, true);
            $table->bigInteger('summary_id', false, true);
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
        Schema::dropIfExists('voicer_page');
    }
}
