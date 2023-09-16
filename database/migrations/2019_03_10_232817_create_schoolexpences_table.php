<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolexpencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolexpences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Date')->nullable();
            $table->text('Subject')->nullable();
            $table->text('Description')->nullable();
            $table->string('Cost')->nullable();
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
        Schema::dropIfExists('schoolexpences');
    }
}
