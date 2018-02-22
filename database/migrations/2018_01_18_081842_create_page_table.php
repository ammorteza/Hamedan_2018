<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_pages')) {
            Schema::create('tbl_pages', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('pMmId')->length(10)->unsigned()->nullable();
                $table->integer('pSmId')->length(10)->unsigned()->nullable();
                $table->integer('pPhtId')->length(10)->unsigned();
                $table->string('pFaSubject');
                $table->string('pEnSubject');
                $table->string('pArSubject');

                $table->string('pFaTitle');
                $table->string('pEnTitle');
                $table->string('pArTitle');

                $table->string('pLinkUrl')->unique();

                $table->longText('pFaDescription')->nullable();
                $table->longText('pEnDescription')->nullable();
                $table->longText('pArDescription')->nullable();
                $table->timestamps();

                $table->foreign('pMmId')
                    ->references('id')->on('tbl_main_menus')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('pSmId')
                    ->references('id')->on('tbl_sub_menus')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('pPhtId')
                    ->references('id')->on('tbl_page_header_types')
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
        Schema::dropIfExists('tbl_pages');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
