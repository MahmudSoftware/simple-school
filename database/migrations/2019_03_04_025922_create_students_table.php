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
            $table->increments('id');
            $table->string('StudentId')->nullable();
            $table->string('StudentName')->nullable();
            $table->string('FathersName')->nullable();
            $table->text('MothersName')->nullable();
            $table->string('MobileNumber')->nullable();
            $table->text('Class')->nullable();
            $table->string('Roll')->nullable();
            $table->string('Address')->nullable();
            $table->string('Photo')->nullable();
            $table->string('JoiningDate')->nullable();
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
