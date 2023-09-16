<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayatentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playatents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Date')->nullable();
            $table->string('StudentName')->nullable();
            $table->text('Status')->nullable();
            $table->string('Remurk')->nullable();
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
        Schema::dropIfExists('playatents');
    }
}
