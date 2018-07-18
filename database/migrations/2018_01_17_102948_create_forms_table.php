<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_forms')) {
            Schema::create('tbl_forms', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedTinyInteger('fIsMultiStepForm')->default(0);
                $table->bigInteger('fPrId')->length(20)->unsigned();
                $table->longText('fFaSubject')->nullable();
                $table->longText('fEnSubject')->nullable();
                $table->longText('fArSubject')->nullable();
                $table->longText('fFaRegisterResult')->nullable();
                $table->longText('fEnRegisterResult')->nullable();
                $table->longText('fArRegisterResult')->nullable();
                $table->string('fMethod')->default('POST');
                $table->timestamps();

                $table->foreign('fPrId')
                    ->references('id')->on('tbl_permission')
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
        Schema::dropIfExists('tbl_forms');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
