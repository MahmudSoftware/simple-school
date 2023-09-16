<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('StudentID')->nullable();
            $table->string('StudentName')->nullable();
            $table->string('FathersName')->nullable();
            $table->string('MobileNumber')->nullable();
            $table->string('Class')->nullable();
            $table->string('Roll')->nullable();
            $table->text('Address')->nullable();
            $table->text('Photo')->nullable();
            $table->string('ExamType')->nullable();
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
        Schema::dropIfExists('admits');
    }
}
