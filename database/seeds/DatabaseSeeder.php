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
        $this->call(PageTableSeeder::class);
        $this->call(PageHeaderImgTableSeeder::class);
    }
}
