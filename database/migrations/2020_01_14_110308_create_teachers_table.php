<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cell_no');
            $table->tinyInteger('departments_id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('gender');
            $table->string('religion');
            $table->date('birthdate');
            $table->string('street_address');
            $table->string('city');
            $table->string('province');
            $table->date('register_date');
            $table->date('date_graduated');
            $table->string('school_graduated');
            $table->string('username')->unique();
            $table->string('password');
            $table->tinyInteger('age');
            $table->tinyInteger('section_id')->nullable();
            $table->tinyInteger('handle_classes')->nullable();
            $table->tinyInteger('type_id')->nullable();
            $table->string('is_teacher')->default(false);
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
        Schema::dropIfExists('teachers');
    }
}
