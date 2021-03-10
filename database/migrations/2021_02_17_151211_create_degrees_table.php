<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id');
            $table->text('btec_name');
            $table->string('btec_subject');
            $table->string('btec_institution');
            $table->text('btec_dissertation');
            $table->string('btec_date_from');
            $table->string('btec_date_to');
            $table->text('master_name');
            $table->string('master_subject');
            $table->string('master_institution');
            $table->text('master_dissertation');
            $table->string('master_date_from');
            $table->string('master_date_to');
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
        Schema::dropIfExists('degrees');
    }
}
