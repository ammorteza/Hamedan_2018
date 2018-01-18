<?php

use Illuminate\Database\Seeder;

class SectionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'SUB_MENU';
        $sType->stSubject = 'زیر منو - محل قرارگیری زیر هدر صفحه';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_SECTION_LEFT';
        $sType->stSubject = 'بخش محتوای دارای تصویر - تصویر بزرگتر سمت چپ';
        $sType->save();
    }
}
