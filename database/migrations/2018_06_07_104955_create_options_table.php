<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_options')) {
            Schema::create('tbl_options', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('oFaSubject');
                $table->string('oEnSubject');
                $table->string('oArSubject');
                $table->string('oName');
                $table->string('oFaValue');
                $table->string('oEnValue');
                $table->string('oArValue');
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
        Schema::dropIfExists('tbl_options');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
