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
            $table->increments('id');
            $table->string('TeachersName')->nullable();
            $table->string('Address')->nullable();
            $table->text('Phone')->nullable();
            $table->string('EduQuly')->nullable();
            $table->text('SofClass')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
