<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_form_answers')) {
            Schema::create('tbl_form_answers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('faQfId')->length(20)->unsigned();
                $table->bigInteger('faUuId')->length(20)->unsigned();
                $table->longText('faValue')->nullable();
                $table->timestamps();

                $table->foreign('faQfId')
                    ->references('id')->on('tbl_question_forms')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('faUuId')
                    ->references('id')->on('tbl_uuids')
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
        Schema::dropIfExists('tbl_form_answers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
