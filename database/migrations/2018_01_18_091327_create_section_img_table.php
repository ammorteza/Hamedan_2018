<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_section_imgs')) {
            Schema::create('tbl_section_imgs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('siSId')->length(20)->unsigned();
                $table->bigInteger('siGId')->length(20)->unsigned();
                $table->unsignedTinyInteger('siOrder')->default(1);
                $table->boolean('siState')->default(true);
                $table->string('siLink')->nullable();

                $table->string('siFaAlt');
                $table->string('siEnAlt');
                $table->string('siArAlt');

                $table->string('siFaSubject')->nullable();
                $table->string('siEnSubject')->nullable();
                $table->string('siArSubject')->nullable();

                $table->longText('siFaDescription')->nullable();
                $table->longText('siEnDescription')->nullable();
                $table->longText('siArDescription')->nullable();

                $table->timestamps();

                $table->foreign('siSId')
                    ->references('id')->on('tbl_sections')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('siGId')
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
        Schema::dropIfExists('tbl_section_imgs');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
