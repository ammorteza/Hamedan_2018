<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Page;
use Hamedan_2018\Section;
use Hamedan_2018\SubMenu;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPage($slug = null)
    {
        return $this->renderPage($slug , 'en');
    }

    public function getPage_fa($slug = null)
    {
        return $this->renderPage($slug , 'fa');
    }

    public function getPage_ar($slug = null)
    {
        return $this->renderPage($slug , 'ar');
    }

/*    public function getPageWithId($pageId , $slug = null)
    {
        echo $pageId . ' - ' . $slug;
    }*/

    private function renderPage($slug , $lan)
    {
        $pageInfo = Page::with('pageHeaderImg.image' , 'headerType' , 'breadCrumb.refPage')
            ->where('pLinkUrl' , '=' , '/' . $slug)
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
