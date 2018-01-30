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
        $this->call(MainMenuTableSeeder::class);
        $this->call(SubMenuTableSeeder::class);
        $this->call(SectionTypeTableSeeder::class);
        $this->call(PageHeaderTypeTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(PageBreadCrumpTableSeeder::class);
        $this->call(PageHeaderImgTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(SectionImgTableSeeder::class);
    }
}
