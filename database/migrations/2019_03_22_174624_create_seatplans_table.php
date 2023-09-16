<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seatplans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ExmType')->nullable();
            $table->string('RoomName')->nullable();
            $table->string('Class')->nullable();
            $table->string('Section')->nullable();
            $table->text('Roll')->nullable();
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
        Schema::dropIfExists('seatplans');
    }
}
