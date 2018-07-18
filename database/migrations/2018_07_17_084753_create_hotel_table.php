<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_hotels')) {
            Schema::create('tbl_hotels', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('hGId')->length(20)->unsigned();
                $table->string('hFaLinkUrl');
                $table->string('hEnLinkUrl');
                $table->string('hArLinkUrl');

                $table->string('hFaSubject');
                $table->string('hEnSubject');
                $table->string('hArSubject');

                $table->longText('hFaDescription');
                $table->longText('hEnDescription');
                $table->longText('hArDescription');
                $table->unsignedTinyInteger('hState')->default(1);
                $table->unsignedTinyInteger('hStar')->default(3);
                $table->unsignedTinyInteger('hSpecial')->default(0);
                $table->timestamps();

                $table->foreign('hGId')
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
        Schema::dropIfExists('tbl_hotels');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
