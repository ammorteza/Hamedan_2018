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
        $page->pFaSubject = 'همدان';
        $page->pEnSubject = 'Hamedan';
        $page->pArSubject = 'همدان';
        $page->pFaTitle = 'همدان ۲۰۱۸';
        $page->pEnTitle = 'Hamedan 2018';
        $page->pArTitle = 'همدان ۲۰۱۸';
        $page->pLinkUrl = '/index';
        $page->pFaDescription = 'همدان پایتخت تاریخ و تمدن ایران زمین';
        $page->pEnDescription = 'Hamedan is the capital of Iranian history and civilization';
        $page->pArDescription = 'همدان هي عاصمة التاريخ والحضارة الإيرانية';
        $page->save();
    }
}
