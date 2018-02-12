<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_news_slider')) {
            Schema::create('tbl_news_slider', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('nsGId')->length(10)->unsigned();
                $table->unsignedTinyInteger('nsOrder')->default(1);
                $table->boolean('nsState')->default(true);

                $table->string('nsFaAlt');
                $table->string('nsEnAlt');
                $table->string('nsArAlt');

                $table->string('nsFaSubject')->nullable();
                $table->string('nsEnSubject')->nullable();
                $table->string('nsArSubject')->nullable();

                $table->longText('nsFaDescription')->nullable();
                $table->longText('nsEnDescription')->nullable();
                $table->longText('nsArDescription')->nullable();

                $table->timestamps();

                $table->foreign('nsGId')
                    ->references('id')->on('tbl_image_gallery')
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
        Schema::dropIfExists('tbl_news_slider');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
