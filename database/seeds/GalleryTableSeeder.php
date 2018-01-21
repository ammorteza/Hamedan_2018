<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = new \Hamedan_2018\ImageGallery;
        $gallery->gPath = 'pic/gallery/1.jpg';
        $gallery->save();

        $gallery = new \Hamedan_2018\ImageGallery;
        $gallery->gPath = 'pic/gallery/2.jpg';
        $gallery->save();

        $gallery = new \Hamedan_2018\ImageGallery;
        $gallery->gPath = 'pic/gallery/3.jpg';
        $gallery->save();

        $gallery = new \Hamedan_2018\ImageGallery;
        $gallery->gPath = 'pic/gallery/4.jpg';
        $gallery->save();

    }
}
