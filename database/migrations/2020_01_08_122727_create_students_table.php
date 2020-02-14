<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('LRN');
            $table->date('register_date');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('gender');
            $table->date('birthday');
            $table->string('religion');
            $table->string('street_address');
            $table->string('city');
            $table->string('province');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('guardian_lastname');
            $table->string('guardian_firstname');
            $table->string('guardian_middlename');
            $table->string('rel_student');
            $table->string('current_res');
            $table->string('guardian_rel');
            $table->string('mother_tounge');
            $table->string('dialects');
            $table->string('ethnicities');
            $table->string('cell_1');
            $table->tinyInteger('year_level_id');
            $table->tinyInteger('section_id')->nullable();
            $table->tinyInteger('type_id')->nullable();
            $table->string('is_student')->default(false);
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
        Schema::dropIfExists('students');
    }
}
