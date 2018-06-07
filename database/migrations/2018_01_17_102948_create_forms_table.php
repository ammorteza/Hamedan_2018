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
        Schema::create('tbl_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('fIsMultiStepForm')->default(0);
            $table->longText('fFaSubject')->nullable();
            $table->longText('fEnSubject')->nullable();
            $table->longText('fArSubject')->nullable();
            $table->longText('fFaRegisterResult')->nullable();
            $table->longText('fEnRegisterResult')->nullable();
            $table->longText('fArRegisterResult')->nullable();
            $table->string('fMethod')->default('POST');
            $table->timestamps();
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
        Schema::dropIfExists('tbl_forms');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
