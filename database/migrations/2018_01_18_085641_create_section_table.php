<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_sections')) {
            Schema::create('tbl_sections', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('sPId')->length(10)->unsigned();
                $table->integer('sStId')->length(10)->unsigned();
                $table->integer('sMmId')->length(10)->unsigned()->nullable(); //use for create SUB_MENU sections
                $table->unsignedTinyInteger('sOrder')->default(1);
                $table->boolean('sState')->default(true);

                $table->string('sLink')->nullable();
                $table->string('sLinkFaTitle')->nullable();
                $table->string('sLinkEnTitle')->nullable();
                $table->string('sLinkArTitle')->nullable();

                $table->string('sFaSubject')->nullable();
                $table->string('sEnSubject')->nullable();
                $table->string('sArSubject')->nullable();

                $table->longText('sFaDescription')->nullable();
                $table->longText('sEnDescription')->nullable();
                $table->longText('sArDescription')->nullable();
                $table->timestamps();

                $table->foreign('sPId')
                    ->references('id')->on('tbl_pages')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('sStId')
                    ->references('id')->on('tbl_section_types')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('sMmId')
                    ->references('id')->on('tbl_main_menus')
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
        Schema::dropIfExists('tbl_sections');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
