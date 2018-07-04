<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('eGId')->length(10)->unsigned();
            $table->string('eLink')->nullable();
            $table->string('eFaLinkTitle')->nullable();
            $table->string('eEnLinkTitle')->nullable();
            $table->string('eArLinkTitle')->nullable();
            $table->string('eFaSubject');
            $table->string('eEnSubject');
            $table->string('eArSubject');
            $table->string('eFaHoldingTime');
            $table->string('eEnHoldingTime');
            $table->string('eArHoldingTime');
            $table->longText('eFaBriefDescription');
            $table->longText('eEnBriefDescription');
            $table->longText('eArBriefDescription');
            $table->longText('eFaDescription')->nullable();
            $table->longText('eEnDescription')->nullable();
            $table->longText('eArDescription')->nullable();
            $table->unsignedTinyInteger('eState')->default(1);
            $table->unsignedTinyInteger('eExpired')->default(0);
            $table->unsignedTinyInteger('eOrder')->default(1);
            $table->unsignedTinyInteger('eType')->default(0); //national or international
            $table->timestamps();

            $table->foreign('eGId')
                ->references('id')->on('tbl_image_gallery')
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
        Schema::dropIfExists('tbl_events');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
