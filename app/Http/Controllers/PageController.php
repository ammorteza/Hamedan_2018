<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($lan = 'Fa')
    {
        return view('pages.section');
    }

    public function getPage($slug = null)
    {
        echo $slug;
    }

    public function getPageWithId($pageId , $slug = null)
    {
        echo $pageId . ' - ' . $slug;
    }
}
