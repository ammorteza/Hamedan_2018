<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPage($slug = null)
    {
        echo $slug;
    }

    public function getPageWithId($pageId , $slug = null)
    {
        echo $pageId . ' - ' . $slug;
    }
}
