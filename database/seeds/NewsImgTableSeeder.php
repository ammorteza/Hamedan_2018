<?php

use Illuminate\Database\Seeder;

class NewsImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nImg = new \Hamedan_2018\NewsImg;
        $nImg->niNId = 1;
        $nImg->niGId = 1;
        $nImg->niFaSubject = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $nImg->niEnSubject = 'Unveiling the logo of Hamadan 2018';
        $nImg->niArSubject = 'كشف النقاب عن شعار همدان 2018';
        $nImg->niFaAlt = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $nImg->niEnAlt = 'Unveiling the logo of Hamadan 2018';
        $nImg->niArAlt = 'كشف النقاب عن شعار همدان 2018';
        $nImg->save();

        $nImg = new \Hamedan_2018\NewsImg;
        $nImg->niNId = 1;
        $nImg->niGId = 2;
        $nImg->niFaSubject = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $nImg->niEnSubject = 'Unveiling the logo of Hamadan 2018';
        $nImg->niArSubject = 'كشف النقاب عن شعار همدان 2018';
        $nImg->niFaAlt = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $nImg->niEnAlt = 'Unveiling the logo of Hamadan 2018';
        $nImg->niArAlt = 'كشف النقاب عن شعار همدان 2018';
        $nImg->save();

        $nImg = new \Hamedan_2018\NewsImg;
        $nImg->niNId = 1;
        $nImg->niGId = 3;
        $nImg->niFaSubject = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $nImg->niEnSubject = 'Unveiling the logo of Hamadan 2018';
        $nImg->niArSubject = 'كشف النقاب عن شعار همدان 2018';
        $nImg->niFaAlt = 'رونمایی از لوگوی همدان ۲۰۱۸';
        $nImg->niEnAlt = 'Unveiling the logo of Hamadan 2018';
        $nImg->niArAlt = 'كشف النقاب عن شعار همدان 2018';
        $nImg->save();
    }
}
