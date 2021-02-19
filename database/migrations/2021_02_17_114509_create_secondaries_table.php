<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pic_id');
            $table->text('secondary_school');
            $table->string('secondary_from');
            $table->string('secondary_to');
            $table->string('secondary_title');
            $table->string('secondary_date');
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
        Schema::dropIfExists('secondaries');
    }
}
