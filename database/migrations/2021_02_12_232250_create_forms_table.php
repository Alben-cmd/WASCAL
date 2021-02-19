<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->string('name_parent');
            $table->string('parent_number');
            $table->string('parent_email');
            $table->string('contact_person')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->text('passport_img');
            $table->text('secondary_school');
            $table->string('secondary_period');
            $table->string('secondary_grade');
            $table->string('secondary_date');
            $table->string('exam_type_1');
            $table->string('exam_type_2');
            $table->string('exam_type_3');
            $table->string('exam_type_4');
            $table->string('exam_type_5');
            $table->string('ssce_1');
            $table->string('ssce_2');
            $table->string('ssce_3');
            $table->string('ssce_4');
            $table->string('ssce_5');
            $table->string('ssce_grade_1');
            $table->string('ssce_grade_2');
            $table->string('ssce_grade_3');
            $table->string('ssce_grade_4');
            $table->string('ssce_grade_5');
            $table->string('ssce_yr_1');
            $table->string('ssce_yr_2');
            $table->string('ssce_yr_3');
            $table->string('ssce_yr_4');
            $table->string('ssce_yr_5');
            $table->text('university');
            $table->string('university_year');
            $table->string('university_qualification');
            $table->string('university_date');
            $table->text('university_2')->nullable();
            $table->string('university_year2')->nullable();
            $table->string('university_qualification2')->nullable();
            $table->string('university_date2')->nullable();
            $table->text('university_3')->nullable();
            $table->string('university_year3')->nullable();
            $table->string('university_qualification3')->nullable();
            $table->string('university_date3')->nullable();
            $table->text('btec_name');
            $table->string('btec_subject');
            $table->string('btec_institution');
            $table->text('btec_dissertation');
            $table->string('btec_date');
            $table->text('master_name');
            $table->string('master_subject');
            $table->string('master_institution');
            $table->text('master_dissertation');
            $table->string('master_date');
            $table->string('lang_english');
            $table->string('lang_french');
            $table->string('lang_others');
            $table->string('computer_msword');
            $table->string('computer_msexcel');
            $table->string('computer_powerpoint');
            $table->string('computer_spss');
            $table->string('computer_gis');
            $table->string('computer_remote_sensing');
            $table->string('computer_others')->nullable();
            $table->text('employment');
            $table->text('referees_name');
            $table->text('referees_institution');
            $table->string('referees_phone');






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
        Schema::dropIfExists('forms');
    }
}
