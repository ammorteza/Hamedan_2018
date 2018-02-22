<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GalleryTableSeeder::class);
        /////////////////// main seeder ////////////////////
        //$this->call(MainMenuTableSeeder::class);
        //$this->call(SubMenuTableSeeder::class);
        //$this->call(SectionTypeTableSeeder::class);
        //$this->call(PageHeaderTypeTableSeeder::class);
        ////////////////////////////////////////////////////
        $this->call(PageTableSeeder::class);
        $this->call(PageBreadCrumbTableSeeder::class);
        $this->call(PageHeaderImgTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(SectionImgTableSeeder::class);
        $this->call(VideoGalleryTableSeeder::class);
        $this->call(SectionVideoTableSeeder::class);
        $this->call(SponsorTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(NewsImgTableSeeder::class);
        $this->call(NewsSliderTableSeeder::class);
        $this->call(AdvertiseTableSeeder::class);
    }
}
