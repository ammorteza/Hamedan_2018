<?php

use Illuminate\Database\Seeder;

class NewsSliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsSlider = new \Hamedan_2018\NewsSlider;
        $newsSlider->nsGId = 1;
        $newsSlider->nsFaSubject = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $newsSlider->nsEnSubject = 'Unveiling the logo of Hamadan 2018';
        $newsSlider->nsArSubject = 'كشف النقاب عن شعار همدان 2018';
        $newsSlider->nsFaAlt = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $newsSlider->nsEnAlt = 'Unveiling the logo of Hamadan 2018';
        $newsSlider->nsArAlt = 'كشف النقاب عن شعار همدان 2018';
        $newsSlider->save();

        $newsSlider = new \Hamedan_2018\NewsSlider;
        $newsSlider->nsGId = 1;
        $newsSlider->nsFaSubject = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $newsSlider->nsEnSubject = 'Unveiling the logo of Hamadan 2018';
        $newsSlider->nsArSubject = 'كشف النقاب عن شعار همدان 2018';
        $newsSlider->nsFaAlt = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $newsSlider->nsEnAlt = 'Unveiling the logo of Hamadan 2018';
        $newsSlider->nsArAlt = 'كشف النقاب عن شعار همدان 2018';
        $newsSlider->save();

        $newsSlider = new \Hamedan_2018\NewsSlider;
        $newsSlider->nsGId = 1;
        $newsSlider->nsFaSubject = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $newsSlider->nsEnSubject = 'Unveiling the logo of Hamadan 2018';
        $newsSlider->nsArSubject = 'كشف النقاب عن شعار همدان 2018';
        $newsSlider->nsFaAlt = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $newsSlider->nsEnAlt = 'Unveiling the logo of Hamadan 2018';
        $newsSlider->nsArAlt = 'كشف النقاب عن شعار همدان 2018';
        $newsSlider->save();
    }
}
