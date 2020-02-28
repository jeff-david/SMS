<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('subject_id');
            $table->tinyInteger('teacher_id');
            $table->bigInteger('user_id');
            $table->tinyInteger('class_id');
            $table->bigInteger('first_grading');
            $table->bigInteger('second_grading');
            $table->bigInteger('third_grading');
            $table->bigInteger('fourth_grading');
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
        Schema::dropIfExists('grades');
    }
}
