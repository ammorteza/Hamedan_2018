<?php

use Illuminate\Database\Seeder;

class VideoGalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vGallery = new \Hamedan_2018\VideoGallery;
        $vGallery->gPath = 'pic/video/1.mp4';
        $vGallery->gFaLocation = 'پرواز در آسمان همدان';
        $vGallery->gEnLocation = 'Fly in the sky of Hamadan';
        $vGallery->gArLocation = 'يطير في سماء همدان';
        $vGallery->gFaEditor = 'فردین چاردولی';
        $vGallery->gEnEditor = 'F.Chardowli';
        $vGallery->gArEditor = 'فردین چاردولی';
        $vGallery->save();

        $vGallery = new \Hamedan_2018\VideoGallery;
        $vGallery->gPath = 'pic/video/2.mp4';
        $vGallery->gFaLocation = 'پرواز در آسمان همدان';
        $vGallery->gEnLocation = 'Fly in the sky of Hamadan';
        $vGallery->gArLocation = 'يطير في سماء همدان';
        $vGallery->gFaEditor = 'فردین چاردولی';
        $vGallery->gEnEditor = 'F.Chardowli';
        $vGallery->gArEditor = 'فردین چاردولی';
        $vGallery->save();
    }
}
