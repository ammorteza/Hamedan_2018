<?php

use Illuminate\Database\Seeder;

class PageHeaderImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 1;
        $pageHeaderImg->phiOrder = 1;
        $pageHeaderImg->phiFaAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->phiEnAlt = 'hamedan 2018';
        $pageHeaderImg->phiArAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->phiFaSubject = 'همدان ۲۰۱۸';
        $pageHeaderImg->phiEnSubject = 'hamadan 2018';
        $pageHeaderImg->phiArSubject = 'همدان ۲۰۱۸';
        $pageHeaderImg->phiFaDescription = 'همدان پایتخت تاریخ تمدن ایران';
        $pageHeaderImg->phiEnDescription = 'Hamedan is the capital of Iranian history and civilization';
        $pageHeaderImg->phiArDescription = 'حمدان كابيتال للحضارة الإيرانية';
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 2;
        $pageHeaderImg->phiOrder = 2;
        $pageHeaderImg->phiFaAlt = 'جشنواره های بومی';
        $pageHeaderImg->phiEnAlt = 'Native festivals';
        $pageHeaderImg->phiArAlt = 'المهرجانات المحلية';
        $pageHeaderImg->phiFaSubject = 'جشنواره های بومی';
        $pageHeaderImg->phiEnSubject = 'Native festivals';
        $pageHeaderImg->phiArSubject = 'المهرجانات المحلية';
        $pageHeaderImg->phiFaDescription = 'جشنواره شیره پزی مانیزان ملایر';
        $pageHeaderImg->phiEnDescription = 'Manizan Malayer Soup Festival';
        $pageHeaderImg->phiArDescription = 'مانيزان مالير حساء المهرجان';
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 3;
        $pageHeaderImg->phiOrder = 3;
        $pageHeaderImg->phiFaAlt = 'ورزش های زمستانی';
        $pageHeaderImg->phiEnAlt = 'winter sports';
        $pageHeaderImg->phiArAlt = 'الرياضات الشتوية';
        $pageHeaderImg->phiFaSubject = 'ورزش های زمستانی';
        $pageHeaderImg->phiEnSubject = 'winter sports';
        $pageHeaderImg->phiArSubject = 'الرياضات الشتوية';
        $pageHeaderImg->phiFaDescription = 'پیست اسکی تاریک دره';
        $pageHeaderImg->phiEnDescription = 'Dark Ski Resort Valley';
        $pageHeaderImg->phiArDescription = 'الظلام منتجع التزلج وادي';
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 4;
        $pageHeaderImg->phiOrder = 4;
        $pageHeaderImg->phiFaAlt = 'طعم غذاهای سنتی در همدان';
        $pageHeaderImg->phiEnAlt = 'Taste traditional dishes in Hamadan';
        $pageHeaderImg->phiArAlt = 'تذوق الأطباق التقليدية في همدان';
        $pageHeaderImg->phiFaSubject = 'طعم غذاهای سنتی در همدان';
        $pageHeaderImg->phiEnSubject = 'Taste traditional dishes in Hamadan';
        $pageHeaderImg->phiArSubject = 'تذوق الأطباق التقليدية في همدان';
        $pageHeaderImg->phiFaDescription = 'همدان پایتخت تاریخ تمدن ایران';
        $pageHeaderImg->phiEnDescription = 'Hamedan is the capital of Iranian history and civilization';
        $pageHeaderImg->phiArDescription = 'حمدان كابيتال للحضارة الإيرانية';
        $pageHeaderImg->save();
////////////////////////////////////////////////////////////////////////////
        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 2;
        $pageHeaderImg->phiGId = 5;
        $pageHeaderImg->phiOrder = 1;
        $pageHeaderImg->phiFaAlt = 'جاذبه ها';
        $pageHeaderImg->phiEnAlt = 'Attractions';
        $pageHeaderImg->phiArAlt = 'جاذبیه';
        $pageHeaderImg->save();
    }
}
