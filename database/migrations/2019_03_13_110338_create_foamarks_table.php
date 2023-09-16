<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoamarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foamarks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('StudentID')->nullable();
            $table->string('Roll')->nullable();
            $table->string('StudentsName')->nullable();
            $table->text('Fathersname')->nullable();
            $table->string('Subjectone')->nullable();
            $table->text('onExmon')->nullable();
            $table->string('twExmon')->nullable();
            $table->string('ThreExmon')->nullable();
            $table->string('FiExmon')->nullable();
            $table->string('TotalOn')->nullable();
            $table->string('AvgOn')->nullable();
            $table->string('SubjectTwo')->nullable();
            $table->text('onExTwo')->nullable();
            $table->text('twExmTwo')->nullable();
            $table->string('ThreExTwo')->nullable();
            $table->text('FiExTwo')->nullable();
            $table->string('TotalTwo')->nullable();
            $table->string('AvgTwo')->nullable();
            $table->string('SubjectThree')->nullable();
            $table->string('onExThree')->nullable();
            $table->string('twExmThree')->nullable();
            $table->string('ThreExmThree')->nullable();
            $table->string('FiExmThree')->nullable();
            $table->text('TotalThree')->nullable();
            $table->string('AvgTotalThree')->nullable();
            $table->text('SubjectFour')->nullable();
            $table->string('onExmFour')->nullable();
            $table->string('twExmFour')->nullable();
            $table->string('ThreeExmFour')->nullable();
            $table->string('FiExmFour')->nullable();
            $table->text('TotalFour')->nullable();
            $table->string('AvgFour')->nullable();
            $table->string('SubjectFive')->nullable();
            $table->string('onExmFive')->nullable();
            $table->string('twExmFive')->nullable();
            $table->text('ThreExmFive')->nullable();
            $table->string('FiExmFive')->nullable();
            $table->string('TotalFive')->nullable();
            $table->string('AvgFive')->nullable();            
            $table->string('SubjectSix')->nullable();
            $table->string('onExmSix')->nullable();
            $table->string('twExmSix')->nullable();
            $table->string('ThreExmSix')->nullable();
            $table->string('FiExmSix')->nullable();
            $table->string('TotalSix')->nullable();
            $table->string('AvgSix')->nullable();            
            $table->string('SubjectSv')->nullable();
            $table->string('onExmSv')->nullable();
            $table->string('twExmSv')->nullable();
            $table->string('ThreExmSv')->nullable();
            $table->string('FiExmSv')->nullable();
            $table->string('TotalSv')->nullable();
            $table->string('AvgSv')->nullable();
            $table->string('onExmTotal')->nullable();
            $table->string('twExmTotal')->nullable();
            $table->string('ThreExmTotal')->nullable();
            $table->string('FiExmTotal')->nullable();
            $table->string('GrandTotal')->nullable();
            $table->string('onExmAverage')->nullable();
            $table->string('twExmAverage')->nullable();
            $table->string('ThreExmAverage')->nullable();
            $table->string('FiExmAverage')->nullable();
            $table->string('GrandAverage')->nullable();
            $table->string('GrandTotalAverage')->nullable();
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
        Schema::dropIfExists('foamarks');
    }
}
