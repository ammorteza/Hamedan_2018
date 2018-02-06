<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.news');
    }
}
