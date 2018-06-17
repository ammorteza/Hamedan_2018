<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_field_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('foOId')->length(10)->unsigned();
            $table->integer('foQId')->length(10)->unsigned();
            $table->unsignedTinyInteger('foChecked')->default(0);
            $table->unsignedTinyInteger('foRequire')->default(0);
            $table->timestamps();

            $table->foreign('foOId')
                ->references('id')->on('tbl_options')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('foQId')
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
        Schema::dropIfExists('tbl_field_options');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
