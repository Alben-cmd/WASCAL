<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('epreuves');
            $table->text('notes');
            $table->text('coeff');
            $table->string('points');
            $table->text('sur');
            $table->text('decision');
            $table->string('unique_id');
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
        Schema::dropIfExists('secondaires');
    }
}
