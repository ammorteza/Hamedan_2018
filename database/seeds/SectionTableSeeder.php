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
        $section->save(); //1

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 5; //SPLITTER
        $section->sOrder = 2;
        $section->save(); //2

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 3;
        $section->sOrder = 4;
        $section->sFaSubject = 'اقامت سبز در شهر تاریخی';
        $section->sEnSubject = 'Green stay in the old city';
        $section->sArSubject = 'الإقامة الخضراء في المدينة القديمة';
        $section->save(); //3

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 4;
        $section->sOrder = 6;
        $section->sFaSubject = 'سوغات همدان';
        $section->sEnSubject = 'Hamedan Souvenir';
        $section->sArSubject = 'الهدايا التذكارية همدان';
        $section->save(); //4

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 5;
        $section->sOrder = 5;
        $section->save(); //5
        ///////////////////// hamedan page ///////////////////////////////
        $section = new \Hamedan_2018\Section;
        $section->sPId = 2;
        $section->sStId = 1;
        $section->sOrder = 1;
        $section->sMmId = 1;
        $section->save(); //6

        $section = new \Hamedan_2018\Section;
        $section->sPId = 2;
        $section->sStId = 6;
        $section->sOrder = 2;
        $section->save(); //7

        $section = new \Hamedan_2018\Section;
        $section->sPId = 2;
        $section->sStId = 2;
        $section->sOrder = 2;
        $section->sFaSubject = 'همدان پایتخت تاریخ و تمدن ایران';
        $section->sEnSubject = 'Hamadan is the capital of Iranian history and civilization';
        $section->sArSubject = 'همدان هي عاصمة التاريخ والحضارة الإيرانية';
        $section->sFaDescription = 'همدان قدیمی‌ترین شهر ایران و از کهن‌ترین شهرهای جهان است.در سال ۱۳۸۵ مجلس شورای اسلامی در مصوبه‌ای همدان را «پایتخت تاریخ و تمدن ایران» اعلام کرد. همدان اولین پایتخت نخستین شاهنشاهی ایران، مادها بوده‌است.';
        $section->sEnDescription = 'Hamedan is the oldest city in Iran and one of the oldest cities in the world. In 2006, the Islamic Consultative Assembly declared Hamedan as "the capital of Iranian history and civilization". Hamedan was the first capital of the first Iranian monarchy, the Medes.';
        $section->sArDescription = 'هامدان هي أقدم مدينة في إيران وأحد أقدم المدن في العالم، وفي عام 2006، أعلنت الجمعية الاستشارية الإسلامية "عاصمة تاريخ وحضارة إيران" في همدان. وكان حمدان أول عاصمة للملكية الإيرانية الأولى، وهي ميديز.';
        $section->save(); //8

        $section = new \Hamedan_2018\Section;
        $section->sPId = 2;
        $section->sStId = 5;
        $section->sOrder = 3;
        $section->save(); //9

        $section = new \Hamedan_2018\Section;
        $section->sPId = 2;
        $section->sStId = 3;
        $section->sOrder = 4;
        $section->sFaSubject = 'اقامت سبز در شهر تاریخی';
        $section->sEnSubject = 'Green stay in the old city';
        $section->sArSubject = 'الإقامة الخضراء في المدينة القديمة';
        $section->save(); //10

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 7;
        $section->sOrder = 8;
        $section->sFaSubject = 'پرواز بر فراز تاریخ';
        $section->sEnSubject = 'Fly over the history';
        $section->sArSubject = 'تطير فوق التاريخ';
        $section->save(); //11

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 8;
        $section->sOrder = 8;
        $section->save(); //12

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 9;
        $section->sOrder = 3;
        $section->sFaSubject = 'دستان هنرمند ایرانی';
        $section->sEnSubject = 'Iranian artist hands';
        $section->sArSubject = 'أيدي الفنان الإيراني';
        $section->sFaDescription = 'همدان قدیمی‌ترین شهر ایران و از کهن‌ترین شهرهای جهان است.در سال ۱۳۸۵ مجلس شورای اسلامی در مصوبه‌ای همدان را «پایتخت تاریخ و تمدن ایران» اعلام کرد. همدان اولین پایتخت نخستین شاهنشاهی ایران، مادها بوده‌است.';
        $section->sEnDescription = 'Hamedan is the oldest city in Iran and one of the oldest cities in the world. In 2006, the Islamic Consultative Assembly declared Hamedan as "the capital of Iranian history and civilization". Hamedan was the first capital of the first Iranian monarchy, the Medes.';
        $section->sArDescription = 'هامدان هي أقدم مدينة في إيران وأحد أقدم المدن في العالم، وفي عام 2006، أعلنت الجمعية الاستشارية الإسلامية "عاصمة تاريخ وحضارة إيران" في همدان. وكان حمدان أول عاصمة للملكية الإيرانية الأولى، وهي ميديز.';
        $section->save(); //13

        $section = new \Hamedan_2018\Section;
        $section->sPId = 1;
        $section->sStId = 11;
        $section->sOrder = 7;
        $section->sFaSubject = 'پرواز بر فراز تاریخ';
        $section->sEnSubject = 'Fly over the history';
        $section->sArSubject = 'تطير فوق التاريخ';
        $section->sFaDescription = 'پاراگلایدر در همدان با شرکت آکسایا پاراگلایدر';
        $section->sEnDescription = 'Paraglider in Hamadan with Aksay Paraglider Company';
        $section->sArDescription = 'المظلات في همدان مع أكسي باراجليدر الشركة';
        $section->sLinkFaTitle = 'بیشتر';
        $section->sLinkEnTitle = 'read more';
        $section->sLinkArTitle = 'اقرأ أكثر';
        $section->sLink = '/page/event/scientificAndSports/flyOverTheHistory';
        $section->save(); //14

        ////////////////// event page /////////////////////////////////
        $section = new \Hamedan_2018\Section;
        $section->sPId = 3;
        $section->sStId = 1;
        $section->sOrder = 1;
        $section->sMmId = 3;
        $section->save(); //15

        $section = new \Hamedan_2018\Section;
        $section->sPId = 3;
        $section->sStId = 6;
        $section->sOrder = 2;
        $section->save(); //7

        $section = new \Hamedan_2018\Section;
        $section->sPId = 3;
        $section->sStId = 12;
        $section->sOrder = 3;
        $section->sFaSubject = 'شرکت آکسایا پاراگلایدر';
        $section->sEnSubject = 'Aksay Paraglider Company';
        $section->sArSubject = 'أكسي باراجليدر الشركة';
        $section->sFaDescription = 'پاراگلایدر در همدان با شرکت آکسایا پاراگلایدر';
        $section->sEnDescription = 'Paraglider in Hamadan with Aksay Paraglider Company';
        $section->sArDescription = 'المظلات في همدان مع أكسي باراجليدر الشركة';
        $section->save(); //16

    }
}
