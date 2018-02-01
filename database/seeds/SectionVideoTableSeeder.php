<?php

use Illuminate\Database\Seeder;

class SectionVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sVideo = new \Hamedan_2018\SectionVideo;
        $sVideo->svSId = 11;
        $sVideo->svVgId = 1;
        $sVideo->svOrder = 1;
        $sVideo->svFaSubject = 'رویدادها و جشنواره ها در همدان';
        $sVideo->svEnSubject = 'Events and festivals in Hamadan';
        $sVideo->svArSubject = 'الأحداث والمهرجانات في همدان';
        $sVideo->svFaDescription = 'افتخار دارد که میزبان رویدادهای بین المللی در طول سال باشد. این جشنواره ها یک مقصد توریستی است که فرصت مهمی برای مهمانان فراهم می کند.';
        $sVideo->svEnDescription = 'Hamadan is proud to host international events throughout the year. These festivals are a tourist destination that offers guests an important opportunity.';
        $sVideo->svArDescription = 'الفعاليات الدولية على مدار العام. هذه المهرجانات هي وجهة سياحية التي توفر للضيوف فرصة هامة.';
        $sVideo->save();

        $sVideo = new \Hamedan_2018\SectionVideo;
        $sVideo->svSId = 11;
        $sVideo->svVgId = 2;
        $sVideo->svOrder = 2;
        $sVideo->svFaSubject = 'رویدادها و جشنواره ها در همدان';
        $sVideo->svEnSubject = 'Events and festivals in Hamadan';
        $sVideo->svArSubject = 'الأحداث والمهرجانات في همدان';
        $sVideo->svFaDescription = 'افتخار دارد که میزبان رویدادهای بین المللی در طول سال باشد. این جشنواره ها یک مقصد توریستی است که فرصت مهمی برای مهمانان فراهم می کند.';
        $sVideo->svEnDescription = 'Hamadan is proud to host international events throughout the year. These festivals are a tourist destination that offers guests an important opportunity.';
        $sVideo->svArDescription = 'الفعاليات الدولية على مدار العام. هذه المهرجانات هي وجهة سياحية التي توفر للضيوف فرصة هامة.';
        $sVideo->save();
    }
}
