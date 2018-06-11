<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qFtId')->length(10)->unsigned();
            $table->string('qFaSubject')->nullable();
            $table->string('qEnSubject')->nullable();
            $table->string('qArSubject')->nullable();
            $table->string('qFaPlaceHolder')->nullable();
            $table->string('qEnPlaceHolder')->nullable();
            $table->string('qArPlaceHolder')->nullable();
            $table->string('qName')->unique();
            $table->timestamps();

            $table->foreign('qFtId')
                ->references('id')->on('tbl_field_types')
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
        Schema::dropIfExists('tbl_questions');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
