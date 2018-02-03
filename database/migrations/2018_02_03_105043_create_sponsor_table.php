<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_sponsors')) {
            Schema::create('tbl_sponsors', function (Blueprint $table) {
                $table->increments('id');
                $table->string('sSubject');
                $table->string('sPath');
                $table->boolean('sState')->default(true);
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
        Schema::dropIfExists('tbl_sponsors');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
