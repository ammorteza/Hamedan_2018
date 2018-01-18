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
