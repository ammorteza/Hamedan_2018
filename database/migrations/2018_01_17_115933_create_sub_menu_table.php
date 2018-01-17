<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_sub_menus')) {
            Schema::create('tbl_sub_menus', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('smMmId')->length(10)->unsigned();
                $table->string('smFaSubject');
                $table->string('smEnSubject');
                $table->string('smArSubject');
                $table->string('smPageLink')->nullable();
                $table->boolean('smState')->default(true);
                $table->timestamps();

                $table->foreign('smMmId')
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
        Schema::dropIfExists('tbl_sub_menus');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
