<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJavaQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('java_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question',300);
            $table->string('op1',300);
            $table->string('op2',100);
            $table->string('op3',100);
            $table->string('op4',100);
            $table->string('ans',100);
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
        Schema::dropIfExists('java_questions');
    }
}
