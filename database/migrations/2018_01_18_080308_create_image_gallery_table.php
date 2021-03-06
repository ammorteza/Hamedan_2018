<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_image_gallery')) {
            Schema::create('tbl_image_gallery', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('gPath')->unique();
                $table->string('gFaLocation')->nullable();
                $table->string('gFaPhotographer');
                $table->string('gEnLocation')->nullable();
                $table->string('gEnPhotographer');
                $table->string('gArLocation')->nullable();
                $table->string('gArPhotographer');
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
        Schema::dropIfExists('tbl_image_gallery');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
