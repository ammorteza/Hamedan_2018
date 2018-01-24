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
        $pageHeaderImg->phiFaAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->phiEnAlt = 'hamedan 2018';
        $pageHeaderImg->phiArAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 3;
        $pageHeaderImg->phiOrder = 3;
        $pageHeaderImg->phiFaAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->phiEnAlt = 'hamedan 2018';
        $pageHeaderImg->phiArAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->save();

        $pageHeaderImg = new \Hamedan_2018\PageHeaderImg;
        $pageHeaderImg->phiPId = 1;
        $pageHeaderImg->phiGId = 4;
        $pageHeaderImg->phiOrder = 4;
        $pageHeaderImg->phiFaAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->phiEnAlt = 'hamedan 2018';
        $pageHeaderImg->phiArAlt = 'همدان ۲۰۱۸';
        $pageHeaderImg->save();
    }
}
