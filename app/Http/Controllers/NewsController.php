<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\News;
use Hamedan_2018\NewsSlider;
use Illuminate\Http\Request;
use Morilog\Jalali\Facades\jDate;

class NewsController extends Controller
{
    public function index()
    {
        return $this->renderNews('en');
    }

    public function index_fa()
    {
        return $this->renderNews('fa');
    }

    public function index_ar()
    {
        return $this->renderNews('ar');
    }

    private function renderNews($lan)
    {
        $newsSlider = NewsSlider::with('gallery')->where('nsState' , '=' , 1)->orderBy('nsOrder' , 'DESC')->get();
        $allNews = News::with('newsImg')->where('nState' , '=' , 1)->orderBy('id' , 'DESC')->paginate(6);
        return view('pages.news' , ['allNews' => $allNews , 'newsSlider' => $newsSlider , 'lan' => $lan]);
    }

    /////////////////// news info ///////////////////
    public function newsInfo($nId)
    {
        return $this->renderNewsInfo('en' , $nId);
    }

    public function newsInfo_fa($nId)
    {
        return $this->renderNewsInfo('fa' , $nId);
    }

    public function newsInfo_ar($nId)
    {
        return $this->renderNewsInfo('ar' , $nId);
    }

    private function renderNewsInfo($lan , $nId)
    {
        News::find($nId)->increment('nViewedCount');
        $news = News::with('newsImg')->where('id' , '=' , $nId)->first();
        return view('pages.newsInfo' , ['news' => $news , 'lan' => $lan]);
    }
}
