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
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 2;
        $pageHeaderImg->phiOrder = 2;
        $pageHeaderImg->phiFaAlt = 'جشنواره های بومی';
        $pageHeaderImg->phiEnAlt = 'Native festivals';
        $pageHeaderImg->phiArAlt = 'المهرجانات المحلية';
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 3;
        $pageHeaderImg->phiOrder = 3;
        $pageHeaderImg->phiFaAlt = 'ورزش های زمستانی';
        $pageHeaderImg->phiEnAlt = 'winter sports';
        $pageHeaderImg->phiArAlt = 'الرياضات الشتوية';
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 4;
        $pageHeaderImg->phiOrder = 4;
        $pageHeaderImg->phiFaAlt = 'طعم غذاهای سنتی در همدان';
        $pageHeaderImg->phiEnAlt = 'Taste traditional dishes in Hamadan';
        $pageHeaderImg->phiArAlt = 'تذوق الأطباق التقليدية في همدان';
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
