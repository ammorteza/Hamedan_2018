<?php

use Illuminate\Database\Seeder;

class SponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sFaSubject = 'اداره کل میراث فرهنگی، صنایع دستی و گردشگری استان همدان';
        $sponsor->sEnSubject = 'Directorate General of Heritage, Handicrafts and Tourism of Hamedan Province';
        $sponsor->sArSubject = 'المديرية العامة للتراث والحرف اليدوية والسياحة بمقاطعة حمدان';
        $sponsor->sPath = 'pic/logo-slider/2.jpg';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sFaSubject = 'شهرداری همدان';
        $sponsor->sEnSubject = 'Municipality of hamedan';
        $sponsor->sArSubject = 'بلدية حميدان';
        $sponsor->sPath = 'pic/logo-slider/3.png';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sFaSubject = 'دانشگاه بوعلی سینا';
        $sponsor->sEnSubject = 'Bu Ali Sina University';
        $sponsor->sArSubject = 'جامعة بو علي سينا';
        $sponsor->sPath = 'pic/logo-slider/4.jpg';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sFaSubject = 'UNWTO';
        $sponsor->sEnSubject = 'UNWTO';
        $sponsor->sArSubject = 'UNWTO';
        $sponsor->sPath = 'pic/logo-slider/5.png';
        $sponsor->save();
    }
}
