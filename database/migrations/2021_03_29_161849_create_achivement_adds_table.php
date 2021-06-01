<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchivementAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achivement_adds', function (Blueprint $table) {
            $table->id();
            $table->integer('album_id');
            $table->string('student_name');
            $table->string('subject_stream');
            $table->string('result');
            $table->string('district');
            $table->string('district_rank');
            $table->string('island_rank');
            $table->string('student_image');
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
        Schema::dropIfExists('achivement_adds');
    }
}
