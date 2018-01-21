<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Page;
use Hamedan_2018\SubMenu;
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

    public function tempSections()
    {
        $pageInfo = Page::with('pageHeaderImg.image')
            ->with('section')
            ->where('pLinkUrl' , '=' , '/index')
            ->first();


        $subMenu = SubMenu::where('smMmId' , '=' , $pageInfo->pMmId)->get();
        return view('pages.tempSection' , ['lan' => 'Fa' , 'pageInfo' => $pageInfo , 'subMenu' => $subMenu]);
    }
}
