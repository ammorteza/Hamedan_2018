<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.news' , ['lan' => 'en']);
    }

    public function index_fa()
    {
        return view('pages.news' , ['lan' => 'fa']);
    }

    public function index_ar()
    {
        return view('pages.news' , ['lan' => 'ar']);
    }

    public function newsInfo()
    {
        return view('pages.newsInfo' , ['lan' => 'en']);
    }

    public function newsInfo_fa()
    {
        return view('pages.newsInfo' , ['lan' => 'fa']);
    }

    public function newsInfo_ar()
    {
        return view('pages.newsInfo' , ['lan' => 'ar']);
    }
}
