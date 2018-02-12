<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_video_gallery')) {
            Schema::create('tbl_video_gallery', function (Blueprint $table) {
                $table->increments('id');
                $table->string('gPath')->unique();
                $table->string('gFaLocation');
                $table->string('gFaEditor');
                $table->string('gEnLocation');
                $table->string('gEnEditor');
                $table->string('gArLocation');
                $table->string('gArEditor');
                $table->string('gPosterPath')->nullable();
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
        Schema::dropIfExists('tbl_video_gallery');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
