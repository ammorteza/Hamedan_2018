<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_question_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qfPId')->length(10)->unsigned();
            $table->integer('qfFrId')->length(10)->unsigned();
            $table->integer('qfQId')->length(10)->unsigned();
            $table->string('qfFaErrorMsg')->nullable();
            $table->string('qfEnErrorMsg')->nullable();
            $table->string('qfArErrorMsg')->nullable();
            $table->unsignedTinyInteger('qfRequire')->default(1);
            $table->unsignedTinyInteger('qfStep')->default(1);
            $table->unsignedTinyInteger('qfGrid')->default(12);
            $table->timestamps();

            $table->foreign('qfPId')
                ->references('id')->on('tbl_patterns')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('qfFrId')
                ->references('id')->on('tbl_forms')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('qfQId')
                ->references('id')->on('tbl_questions')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('tbl_question_forms');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
