<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Page;
use Hamedan_2018\Section;
use Hamedan_2018\SubMenu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return $this->renderPage('en');
    }

    public function index_fa()
    {
        return $this->renderPage('fa');
    }

    public function index_ar()
    {
        return $this->renderPage('ar');
    }

    private function renderPage($lan)
    {
        $pageInfo = Page::with('pageHeaderImg.image' , 'headerType')
            ->where('pLinkUrl' , '=' , '/')
            ->first();
        $sections = Section::with('sectionType')
            ->with('sectionImg.gallery' , 'sectionVideo.gallery')
            ->where('sPId' , '=' , $pageInfo->id)
            ->where('sState' , '=' , true)
            ->orderBy('sOrder' , 'ASC')
            ->get();
        return view('pages.section' , ['lan' => $lan , 'pageInfo' => $pageInfo , 'sections' => $sections]);
    }
}
