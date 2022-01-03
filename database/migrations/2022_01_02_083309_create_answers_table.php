<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('user_answer');
            $table->foreignId('user_id')
                  ->unsigned()
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
                   $table->foreignId('question_id')
                  ->unsigned()
                  ->references('id')
                  ->on('questions')
                  ->onDelete('cascade');
                   $table->foreignId('exam_id')
                  ->unsigned()
                  ->references('id')
                  ->on('exams')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('answers');
    }
}
