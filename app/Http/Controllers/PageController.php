<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getPage($slug = null)
    {
        echo $slug;
    }
}
