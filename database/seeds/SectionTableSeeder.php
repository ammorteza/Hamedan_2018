<?php

use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 2;
        $section->sOrder = 1;
        $section->sFaSubject = 'همدان پایتخت تاریخ و تمدن ایران';
        $section->sEnSubject = 'Hamadan is the capital of Iranian history and civilization';
        $section->sArSubject = 'همدان هي عاصمة التاريخ والحضارة الإيرانية';
        $section->sFaDescription = 'همدان قدیمی‌ترین شهر ایران و از کهن‌ترین شهرهای جهان است.در سال ۱۳۸۵ مجلس شورای اسلامی در مصوبه‌ای همدان را «پایتخت تاریخ و تمدن ایران» اعلام کرد. همدان اولین پایتخت نخستین شاهنشاهی ایران، مادها بوده‌است.';
        $section->sEnDescription = 'Hamedan is the oldest city in Iran and one of the oldest cities in the world. In 2006, the Islamic Consultative Assembly declared Hamedan as "the capital of Iranian history and civilization". Hamedan was the first capital of the first Iranian monarchy, the Medes.';
        $section->sArDescription = 'هامدان هي أقدم مدينة في إيران وأحد أقدم المدن في العالم، وفي عام 2006، أعلنت الجمعية الاستشارية الإسلامية "عاصمة تاريخ وحضارة إيران" في همدان. وكان حمدان أول عاصمة للملكية الإيرانية الأولى، وهي ميديز.';
        $section->save();

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 5;
        $section->sOrder = 2;
        $section->save();

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 3;
        $section->sOrder = 3;
        $section->sFaSubject = 'اقامت سبز در شهر تاریخی';
        $section->sEnSubject = 'Green stay in the old city';
        $section->sArSubject = 'الإقامة الخضراء في المدينة القديمة';
        $section->save();

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 4;
        $section->sOrder = 5;
        $section->sFaSubject = 'سوغات همدان';
        $section->sEnSubject = 'Hamedan Souvenir';
        $section->sArSubject = 'الهدايا التذكارية همدان';
        $section->save();

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 5;
        $section->sOrder = 4;
        $section->save();

        $section = new \Hamedan_2018\Section;
        $section->sPId = 2;
        $section->sStId = 1;
        $section->sOrder = 1;
        $section->sMmId = 1;
        $section->save();

    }
}
