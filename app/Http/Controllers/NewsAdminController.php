<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsAdminController extends Controller
{
    function index()
    {

    }
    function news()
    {
        return view('pages.admin.allNews');
    }
    function register()
    {
        return view('pages.admin.registerNews');
    }
}
