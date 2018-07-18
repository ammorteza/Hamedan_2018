<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_news_img')) {
            Schema::create('tbl_news_img', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('niNId')->length(20)->unsigned();
                $table->bigInteger('niGId')->length(20)->unsigned();
                $table->unsignedTinyInteger('niOrder')->default(1);
                $table->boolean('niState')->default(true);

                $table->string('niFaAlt');
                $table->string('niEnAlt');
                $table->string('niArAlt');

                $table->string('niFaSubject')->nullable();
                $table->string('niEnSubject')->nullable();
                $table->string('niArSubject')->nullable();

                $table->longText('niFaDescription')->nullable();
                $table->longText('niEnDescription')->nullable();
                $table->longText('niArDescription')->nullable();

                $table->timestamps();

                $table->foreign('niGId')
                    ->references('id')->on('tbl_image_gallery')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('niNId')
                    ->references('id')->on('tbl_news')
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
        Schema::dropIfExists('tbl_news_img');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
