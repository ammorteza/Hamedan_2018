<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Page;
use Hamedan_2018\SubMenu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return $this->renderPage('Fa');
    }

    public function index_en()
    {
        return $this->renderPage('En');
    }

    public function index_ar()
    {
        return $this->renderPage('Ar');
    }

    private function renderPage($lan)
    {
        $pageInfo = Page::with('pageHeaderImg.image')
            ->with('section')
            ->where('pLinkUrl' , '=' , '/index')
            ->first();


        $subMenu = SubMenu::where('smMmId' , '=' , $pageInfo->pMmId)->get();
        return view('pages.section' , ['lan' => $lan , 'pageInfo' => $pageInfo , 'subMenu' => $subMenu]);
    }
}
