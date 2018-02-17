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
        $sType->save(); //1

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_LEFT';
        $sType->stSubject = 'بخش محتوای دارای تصویر - تصویر بزرگتر سمت چپ';
        $sType->save(); //2

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_IMAGE_SLIDER';
        $sType->stSubject = 'گالری تصاویر';
        $sType->save(); //3

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_WIDE_SLIDER';
        $sType->stSubject = 'گالری تصاویر تصاویر تمام صفحه';
        $sType->save(); //4

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'SECTION_SPLITTER';
        $sType->stSubject = 'جدا کننده بخش ها';
        $sType->save(); //5

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'BREAD_CRUMB';
        $sType->stSubject = 'مشخص کننده وضعیت صفحه';
        $sType->save(); //6

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_VIDEO';
        $sType->stSubject = 'گالری ویدیو';
        $sType->save(); //7

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_SPONSOR';
        $sType->stSubject = 'اسلایدر معرفی اسپانسرها';
        $sType->save(); //8

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_IMAGE_RIGHT_TEXT_LEFT';
        $sType->stSubject = 'تصویر در سمت راست و متن مربوطه در سمت چپ';
        $sType->save(); //9

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_IMAGE_LEFT_TEXT_RIGHT';
        $sType->stSubject = 'تصویر در سمت چپ و متن در سمت راست';
        $sType->save(); //10

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_IMAGE_TOP_FADE';
        $sType->stSubject = 'تصویر تمام صفحه، بالای تصویر محو شده';
        $sType->save(); //11

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'CONTENT_TEXT';
        $sType->stSubject = 'استفاده برای صفحه های info';
        $sType->save(); //12

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'FOUR_IMAGE_GALLERY';
        $sType->stSubject = 'چهار تصویر در کنار هم بدون متن';
        $sType->save(); //13

        $sType = new \Hamedan_2018\SectionType;
        $sType->stType = 'LIGHT_BOX_IMAGE_GALLERY';
        $sType->stSubject = 'گالری از تصاویر و امکان باز شدن تصویر تمام صفحه و تعویض تصاویر';
        $sType->save(); //14
    }
}
