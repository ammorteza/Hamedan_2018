<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageHeaderImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_page_header_img')) {
            Schema::create('tbl_page_header_img', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('phiPId')->length(20)->unsigned();
                $table->bigInteger('phiGId')->length(20)->unsigned();
                $table->unsignedTinyInteger('phiOrder')->default(1);
                $table->boolean('phiState')->default(true);
                $table->string('phiLink')->nullable();
                $table->string('phiLinkFaTitle')->nullable();
                $table->string('phiLinkEnTitle')->nullable();
                $table->string('phiLinkArTitle')->nullable();

                $table->string('phiFaAlt');
                $table->string('phiEnAlt');
                $table->string('phiArAlt');

                $table->string('phiFaSubject')->nullable();
                $table->string('phiEnSubject')->nullable();
                $table->string('phiArSubject')->nullable();

                $table->longText('phiFaDescription')->nullable();
                $table->longText('phiEnDescription')->nullable();
                $table->longText('phiArDescription')->nullable();

                $table->timestamps();

                $table->foreign('phiPId')
                    ->references('id')->on('tbl_pages')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('phiGId')
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
        Schema::dropIfExists('tbl_page_header_img');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
