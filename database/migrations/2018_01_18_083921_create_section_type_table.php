<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_section_types')) {
            Schema::create('tbl_section_types', function (Blueprint $table) {
                $table->increments('id');
                $table->string('stType')->unique();
                $table->string('stSubject');
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
        Schema::dropIfExists('tbl_section_types');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
