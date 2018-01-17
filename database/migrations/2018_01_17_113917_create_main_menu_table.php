<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_main_menus')) {
            Schema::create('tbl_main_menus', function (Blueprint $table) {
                $table->increments('id');
                $table->string('mmFaSubject');
                $table->string('mmEnSubject');
                $table->string('mmArSubject');
                $table->string('mmPageLink')->nullable();
                $table->boolean('mmState')->default(true);
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
        Schema::dropIfExists('tbl_main_menus');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
