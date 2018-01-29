<?php

use Illuminate\Database\Seeder;

class PageHeaderTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pht = new \Hamedan_2018\PageHeaderType;
        $pht->phtType = 'ADVANCE';
        $pht->phtSubject = 'هدر صفحه پیشرفته، با عنوان تصاویر و امکان تعویض آن، عنوان هر تصویر در سمت راست صفحه (فارسی) نمایش داده می شود';
        $pht->save();

        $pht = new \Hamedan_2018\PageHeaderType;
        $pht->phtType = 'SIMPLE';
        $pht->phtSubject = 'هدر صفحه معمولی بدون امکان تغییر دستی تصاویر، عنوان صفحه و توضیحات آن در وسط هدر نمایش داده می شود';
        $pht->save();
    }
}
