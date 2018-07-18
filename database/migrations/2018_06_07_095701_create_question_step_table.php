<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionStepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_question_steps')) {
            Schema::create('tbl_question_steps', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('qsFaSubject');
                $table->string('qsEnSubject');
                $table->string('qsArSubject');
                $table->timestamps();
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
        Schema::dropIfExists('tbl_question_steps');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
