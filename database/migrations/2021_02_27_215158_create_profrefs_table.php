<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfrefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profrefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_name');
            $table->string('applicant_relationship');
            $table->string('applicant_job');
            $table->string('application_date');
            $table->string('application_work');
            $table->string('application_duties');
            $table->string('application_responsibility');
            $table->text('application_character');
            $table->text('application_discipline');
            $table->text('application_ability')->nullable();
            $table->text('application_release');
            $table->string('application_thinking');
            $table->string('application_performance');
            $table->string('application_ethics');
            $table->string('application_creative');
            $table->string('application_time');
            $table->text('application_reason');
            $table->string('referee_name');
            $table->string('referee_position');
            $table->string('referee_rank');
            $table->string('referee_institution');
            $table->string('referee_address');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profrefs');
    }
}
