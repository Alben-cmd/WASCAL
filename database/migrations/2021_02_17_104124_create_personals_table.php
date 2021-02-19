<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pic_id');
            $table->string('unique_id');
            $table->string('Lname');
            $table->string('fname');
            $table->string('oname')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('number_children')->nullable();
            $table->string('age_children')->nullable();
            $table->string('country_residence');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('parent_name');
            $table->string('parent_number');
            $table->string('parent_email');
            $table->string('contact_person')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
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
        Schema::dropIfExists('personals');
    }
}
