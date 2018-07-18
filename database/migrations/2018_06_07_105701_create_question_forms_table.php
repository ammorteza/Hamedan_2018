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
        if (!Schema::hasTable('tbl_question_forms')) {
            Schema::create('tbl_question_forms', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('qfPId')->length(20)->unsigned();
                $table->bigInteger('qfFrId')->length(20)->unsigned();
                $table->bigInteger('qfQId')->length(20)->unsigned();
                $table->bigInteger('qfQsId')->length(20)->unsigned()->nullable();
                $table->string('qfFaErrorMsg')->nullable();
                $table->string('qfEnErrorMsg')->nullable();
                $table->string('qfArErrorMsg')->nullable();
                $table->unsignedTinyInteger('qfRequire')->default(1);
                $table->unsignedTinyInteger('qfStep')->default(1);
                $table->unsignedTinyInteger('qfGrid')->default(12);
                $table->unsignedTinyInteger('qfUnique')->default(0);
                $table->unsignedTinyInteger('qfOrder')->default(1);
                $table->unsignedTinyInteger('qfState')->default(1);
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

                $table->foreign('qfQsId')
                    ->references('id')->on('tbl_question_steps')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
            });
        }
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
