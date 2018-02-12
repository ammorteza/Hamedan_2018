<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageBreadcrumbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_page_breadcrumbs')) {
            Schema::create('tbl_page_breadcrumbs', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('pbPId')->length(10)->unsigned();
                $table->integer('pbPPId')->length(10)->unsigned();
                $table->unsignedTinyInteger('pbOrder')->default(1);
                $table->timestamps();

                $table->foreign('pbPId')
                    ->references('id')->on('tbl_pages')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('pbPPId')
                    ->references('id')->on('tbl_pages')
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
        Schema::dropIfExists('tbl_page_breadcrumbs');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
