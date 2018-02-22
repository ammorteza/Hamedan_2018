<?php

use Illuminate\Database\Seeder;

class MainMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainMenu = new \Hamedan_2018\MainMenu;
        $mainMenu->mmFaSubject = 'همدان';
        $mainMenu->mmEnSubject = 'Hamedan';
        $mainMenu->mmArSubject = 'همدان';
        $mainMenu->mmPageLink = '/page/hamadan/history';
        $mainMenu->save();

        $mainMenu = new \Hamedan_2018\MainMenu;
        $mainMenu->mmFaSubject = 'اخبار';
        $mainMenu->mmEnSubject = 'News';
        $mainMenu->mmArSubject = 'أخبار';
        $mainMenu->mmPageLink = '/news';
        $mainMenu->save();

        $mainMenu = new \Hamedan_2018\MainMenu;
        $mainMenu->mmFaSubject = 'رویدادها';
        $mainMenu->mmEnSubject = 'Events';
        $mainMenu->mmArSubject = 'أحداث';
        $mainMenu->mmPageLink = '/page/event/scientificAndSports/flyOverTheHistory';
        $mainMenu->save();
    }
}
