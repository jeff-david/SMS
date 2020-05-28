<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeTwelveSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_twelve_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('department_id');
            $table->bigInteger('year_level_id');
            $table->bigInteger('semester');
            $table->string('subject_name');
            $table->string('description');
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
        Schema::dropIfExists('grade_twelve_subjects');
    }
}
