<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageHeaderTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_page_header_types')) {
            Schema::create('tbl_page_header_types', function (Blueprint $table) {
                $table->increments('id');
                $table->string('phtType')->unique();
                $table->string('phtSubject');
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
        Schema::dropIfExists('tbl_page_header_types');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
