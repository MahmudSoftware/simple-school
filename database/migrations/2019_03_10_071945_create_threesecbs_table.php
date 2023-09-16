<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreesecbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threesecbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('StdImage')->nullable();
            $table->string('StudentsName')->nullable();
            $table->string('Roll')->nullable();
            $table->string('StudentID')->nullable();
            $table->string('Date')->nullable();
            $table->text('Descriptionon')->nullable();
            $table->string('UnitPriceon')->nullable();
            $table->string('Quantityon')->nullable();
            $table->string('TotalPriceon')->nullable();
            $table->text('Descriptiontw')->nullable();
            $table->string('Unittw')->nullable();
            $table->string('Pricetw')->nullable();
            $table->string('TotalPricetw')->nullable();
            $table->text('Descriptionth')->nullable();
            $table->string('UnitPriceth')->nullable();
            $table->string('Quantityth')->nullable();
            $table->string('Totalth')->nullable();
            $table->text('Descriptionfo')->nullable();
            $table->string('UnitPricefo')->nullable();
            $table->string('Quantityfo')->nullable();
            $table->string('Totalfo')->nullable();
            $table->text('Descriptionfi')->nullable();
            $table->string('UnitPricefi')->nullable();
            $table->string('Quantityfi')->nullable();
            $table->string('TotalFive')->nullable();
            $table->string('TotalCPrices')->nullable();
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
        Schema::dropIfExists('threesecbs');
    }
}
