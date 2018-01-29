<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new \Hamedan_2018\Page;
        $page->pPhtId = 1;
        $page->pFaSubject = 'همدان ۲۰۱۸';
        $page->pEnSubject = 'Hamedan 2018';
        $page->pArSubject = 'همدان ۲۰۱۸';
        $page->pFaTitle = 'همدان ۲۰۱۸';
        $page->pEnTitle = 'Hamedan 2018';
        $page->pArTitle = 'همدان ۲۰۱۸';
        $page->pLinkUrl = '/index';
        $page->pFaDescription = 'همدان پایتخت تاریخ و تمدن ایران زمین';
        $page->pEnDescription = 'Hamedan is the capital of Iranian history and civilization';
        $page->pArDescription = 'همدان هي عاصمة التاريخ والحضارة الإيرانية';
        $page->save();

        $page = new \Hamedan_2018\Page;
        $page->pPhtId = 2;
        $page->pMmId = 1;
        $page->pSmId = 1;
        $page->pFaSubject = 'جاذبه ها';
        $page->pEnSubject = 'Attractions';
        $page->pArSubject = 'جاذبیه';
        $page->pFaTitle = 'جاذبه ها';
        $page->pEnTitle = 'Attractions';
        $page->pArTitle = 'جاذبیه';
        $page->pLinkUrl = '/hamadan/history';
        $page->pFaDescription = 'از جاذبه های تاریخی و گردشگری همدان دیدن کنید';
        $page->pEnDescription = 'Visit the historical and tourist attractions of Hamadan';
        $page->pArDescription = 'زيارة المعالم التاريخية والسياحية في همدان';
        $page->save();
    }
}
