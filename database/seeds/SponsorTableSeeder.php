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
        $sponsor->sSubject = 'اداره کل میراث فرهنگی، صنایع دستی و گردشگری استان همدان';
        $sponsor->sPath = 'pic/logo-slider/2.jpg';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sSubject = 'شهرداری همدان';
        $sponsor->sPath = 'pic/logo-slider/3.png';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sSubject = 'دانشگاه بوعلی سینا';
        $sponsor->sPath = 'pic/logo-slider/4.jpg';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sSubject = 'UNWTO';
        $sponsor->sPath = 'pic/logo-slider/5.png';
        $sponsor->save();
    }
}
