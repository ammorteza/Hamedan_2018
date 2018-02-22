<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_advertises')) {
            Schema::create('tbl_advertises', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('aGId')->length(10)->unsigned();
                $table->boolean('aState')->default(true);

                $table->string('aLink')->nullable();
                $table->string('aLinkFaTitle')->nullable();
                $table->string('aLinkEnTitle')->nullable();
                $table->string('aLinkArTitle')->nullable();

                $table->string('aFaAlt');
                $table->string('aEnAlt');
                $table->string('aArAlt');

                $table->string('aFaSubject')->nullable();
                $table->string('aEnSubject')->nullable();
                $table->string('aArSubject')->nullable();

                $table->longText('aFaDescription')->nullable();
                $table->longText('aEnDescription')->nullable();
                $table->longText('aArDescription')->nullable();

                $table->timestamps();

                $table->foreign('aGId')
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
        Schema::dropIfExists('tbl_advertises');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
