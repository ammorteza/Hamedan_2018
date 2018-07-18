<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_section_videos')) {
            Schema::create('tbl_section_videos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('svSId')->length(20)->unsigned();
                $table->bigInteger('svVgId')->length(20)->unsigned();
                $table->unsignedTinyInteger('svOrder')->default(1);
                $table->boolean('svState')->default(true);

                $table->string('svFaSubject')->nullable();
                $table->string('svEnSubject')->nullable();
                $table->string('svArSubject')->nullable();

                $table->longText('svFaDescription')->nullable();
                $table->longText('svEnDescription')->nullable();
                $table->longText('svArDescription')->nullable();

                $table->timestamps();

                $table->foreign('svSId')
                    ->references('id')->on('tbl_sections')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('svVgId')
                    ->references('id')->on('tbl_video_gallery')
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
        Schema::dropIfExists('tbl_section_videos');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
