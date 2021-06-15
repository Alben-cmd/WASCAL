<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicrefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicrefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_name');
            $table->string('applicant_study');
            $table->text('application_capacity');
            $table->string('applicant_coursename');
            $table->string('application_score');
            $table->string('application_understand');
            $table->string('application_read');
            $table->text('application_write');
            $table->text('application_preparation');
            $table->text('application_originality');
            $table->text('application_research');
            $table->string('application_industriousness');
            $table->string('application_intellectual');
            $table->string('application_teaching');
            $table->string('application_creativity');
            $table->string('application_ethics');
            $table->string('application_thinking');
            $table->string('application_relationship');
            $table->text('application_personality');
            $table->text('application_strength');
            $table->text('application_recentstudy');
            $table->text('application_comment');
            $table->string('referee_name');
            $table->string('referee_position');
            $table->text('referee_rank');
            $table->text('referee_institution');
            $table->string('referee_phone');
            $table->text('referee_address');
            $table->text('referee_email');
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
        Schema::dropIfExists('academicrefs');
    }
}
