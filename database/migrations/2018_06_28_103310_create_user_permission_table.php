<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_permission', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('upUId')->length(10)->unsigned();
            $table->integer('upPId')->length(10)->unsigned();
            $table->timestamps();

            $table->foreign('upUId')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('upPId')
                ->references('id')->on('tbl_permission')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('tbl_user_permission');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
