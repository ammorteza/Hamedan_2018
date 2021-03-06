<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_news')) {
            Schema::create('tbl_news', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('nViewedCount')->default(0);
                $table->string('nFaSubject');
                $table->string('nEnSubject')->nullable();
                $table->string('nArSubject')->nullable();
                $table->longText('nFaBriefDescription');
                $table->longText('nEnBriefDescription')->nullable();
                $table->longText('nArBriefDescription')->nullable();
                $table->longText('nFaDescription');
                $table->longText('nEnDescription')->nullable();
                $table->longText('nArDescription')->nullable();
                $table->boolean('nState')->default(true);
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
        Schema::dropIfExists('tbl_news');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
