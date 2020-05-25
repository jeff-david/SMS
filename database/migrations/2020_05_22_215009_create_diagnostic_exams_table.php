<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('LRN');
            $table->bigInteger('English')->nullable();
            $table->bigInteger('Filipino')->nullable();
            $table->bigInteger('Math')->nullable();
            $table->bigInteger('Science')->nullable();
            $table->bigInteger('Aral_Pan')->nullable();
            $table->float('Average')->nullable();
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
        Schema::dropIfExists('diagnostic_exams');
    }
}
