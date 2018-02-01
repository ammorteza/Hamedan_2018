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
        $sType->stType = 'CONTENT_LEFT';
        $sType->stSubject = 'بخش محتوای دارای تصویر - تصویر بزرگتر سمت چپ';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_IMAGE_SLIDER';
        $sType->stSubject = 'گالری تصاویر';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_WIDE_SLIDER';
        $sType->stSubject = 'گالری تصاویر تصاویر تمام صفحه';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'SECTION_SPLITTER';
        $sType->stSubject = 'جدا کننده بخش ها';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'BREAD_CRUMB';
        $sType->stSubject = 'مشخص کننده وضعیت صفحه';
        $sType->save();
    }
}
