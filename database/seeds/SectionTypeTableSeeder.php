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

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_VIDEO';
        $sType->stSubject = 'گالری ویدیو';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_SPONSOR';
        $sType->stSubject = 'اسلایدر معرفی اسپانسرها';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_IMAGE_RIGHT_TEXT_LEFT';
        $sType->stSubject = 'تصویر در سمت راست و متن مربوطه در سمت چپ';
        $sType->save();

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_IMAGE_LEFT_TEXT_RIGHT';
        $sType->stSubject = 'تصویر در سمت چپ و متن در سمت راست';
        $sType->save();
    }
}
