<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_permission')) {
            Schema::create('tbl_permission', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('pSubject');
                $table->string('pPermission')->unique();
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
        Schema::dropIfExists('tbl_permission');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
