<?php

use Illuminate\Database\Seeder;

class PageBreadCrumpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageBC = new \Hamedan_2018\PageBreadCrump;
        $pageBC->pbPId = 2;
        $pageBC->pbPPId = 1;
        $pageBC->pbOrder = 1;
        $pageBC->save();
    }
}
