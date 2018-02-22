<?php

use Illuminate\Database\Seeder;

class AdvertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advertise = new \Hamedan_2018\Advertise;
        $advertise->aGId = 14;
        $advertise->aLink = '';

        $advertise->aFaAlt = 'رستورات میسان';
        $advertise->aEnAlt = 'Maysan Restaurant';
        $advertise->aArAlt = 'مطعم ميسان';

        $advertise->aLinkFaTitle = 'بیشتر';
        $advertise->aLinkEnTitle = 'More';
        $advertise->aLinkArTitle = 'أكثر';

        $advertise->aFaSubject = 'رستورات میسان';
        $advertise->aEnSubject = 'Maysan Restaurant';
        $advertise->aArSubject = 'مطعم ميسان';

        $advertise->aFaDescription = 'کیفیت را با میسان تجربه کنید';
        $advertise->aEnDescription = 'Experience with Myssance';
        $advertise->aArDescription = 'تجربة مع ميسانس';
        $advertise->save();

        $advertise = new \Hamedan_2018\Advertise;
        $advertise->aGId = 15;
        $advertise->aLink = '';

        $advertise->aFaAlt = 'رستورات میسان';
        $advertise->aEnAlt = 'Maysan Restaurant';
        $advertise->aArAlt = 'مطعم ميسان';

        $advertise->aLinkFaTitle = 'بیشتر';
        $advertise->aLinkEnTitle = 'More';
        $advertise->aLinkArTitle = 'أكثر';

        $advertise->aFaSubject = 'رستورات میسان';
        $advertise->aEnSubject = 'Maysan Restaurant';
        $advertise->aArSubject = 'مطعم ميسان';

        $advertise->aFaDescription = 'کیفیت را با میسان تجربه کنید';
        $advertise->aEnDescription = 'Experience with Myssance';
        $advertise->aArDescription = 'تجربة مع ميسانس';
        $advertise->save();


    }
}
