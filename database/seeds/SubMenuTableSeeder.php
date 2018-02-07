<?php

use Illuminate\Database\Seeder;

class SubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 1;
        $subMenu->smFaSubject = 'جاذبه ها';
        $subMenu->smEnSubject = 'Attraction';
        $subMenu->smPageLink = '/page/hamadan/history';
        $subMenu->smArSubject = 'جاذبیه';
        $subMenu->save(); //1

        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 1;
        $subMenu->smFaSubject = 'تاریخچه';
        $subMenu->smEnSubject = 'History';
        $subMenu->smArSubject = 'تاریخ';
        $subMenu->save(); //2

        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 1;
        $subMenu->smFaSubject = 'مشاهیر';
        $subMenu->smEnSubject = 'celebrities';
        $subMenu->smArSubject = 'المشاهير';
        $subMenu->save(); //3

        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 1;
        $subMenu->smFaSubject = 'آداب و رسوم';
        $subMenu->smEnSubject = 'Culture';
        $subMenu->smArSubject = 'ثقافة';
        $subMenu->save(); //4

        /////////////////////////////////////////////////////
        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 2;
        $subMenu->smFaSubject = 'همدان ۲۰۱۸';
        $subMenu->smEnSubject = 'Hamadan 2018';
        $subMenu->smArSubject = 'همدان ۲۰۱۸';
        $subMenu->save(); //5

        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 2;
        $subMenu->smFaSubject = 'UNWTO';
        $subMenu->smEnSubject = 'UNWTO';
        $subMenu->smArSubject = 'UNWTO';
        $subMenu->save(); //6

        /////////////////////////////////////////////////////
        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 3;
        $subMenu->smFaSubject = 'تفریحی و گردشگری';
        $subMenu->smEnSubject = 'Recreation and tourism';
        $subMenu->smArSubject = 'الترفيه والسياحة';
        $subMenu->save(); //7

        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 3;
        $subMenu->smFaSubject = 'علمی و ورزشی';
        $subMenu->smEnSubject = 'Scientific and sports';
        $subMenu->smArSubject = 'العلمية والرياضية';
        $subMenu->save(); //8

        $subMenu = new \Hamedan_2018\SubMenu;
        $subMenu->smMmId = 3;
        $subMenu->smFaSubject = 'جشنواره های بومی';
        $subMenu->smEnSubject = 'Native festivals';
        $subMenu->smArSubject = 'المهرجانات المحلية';
        $subMenu->save(); //9
    }
}
