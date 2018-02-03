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
        $sponsor->sSubject = '';
        $sponsor->sPath = 'pic/logo-slider/2.jpg';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sSubject = '';
        $sponsor->sPath = 'pic/logo-slider/3.jpg';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sSubject = '';
        $sponsor->sPath = 'pic/logo-slider/4.jpg';
        $sponsor->save();

        $sponsor = new \Hamedan_2018\Sponsor;
        $sponsor->sSubject = '';
        $sponsor->sPath = 'pic/logo-slider/5.jpg';
        $sponsor->save();
    }
}
