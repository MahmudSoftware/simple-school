<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStattentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stattents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Class')->nullable();
            $table->string('StudentNane')->nullable();
            $table->text('AttendanceStatus')->nullable();
            $table->string('Resone')->nullable();
            $table->string('Date')->nullable();
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
        Schema::dropIfExists('stattents');
    }
}
