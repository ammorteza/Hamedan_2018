<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Advertise;
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
        if (Advertise::where('aState' , '=' , 1)->count() > 0)
            $advertise = Advertise::where('aState' , '=' , 1)->with('gallery')->first();
        else
            $advertise = null;

        $newsSlider = NewsSlider::with('gallery')->where('nsState' , '=' , 1)->orderBy('nsOrder' , 'DESC')->get();
        if ($lan == 'en')
        {
            $allNews = News::with('newsImg')
                ->where('nState' , '=' , 1)
                ->where('nEnSubject' , '<>' , '')
                ->where('nEnBriefDescription' , '<>' , '')
                ->where('nEnDescription' , '<>' , '')
                ->orderBy('id' , 'DESC')
                ->paginate(6);
        }else if ($lan == 'fa') {
            $allNews = News::with('newsImg')
                ->where('nState' , '=' , 1)
                ->where('nFaSubject' , '<>' , '')
                ->where('nFaBriefDescription' , '<>' , '')
                ->where('nFaDescription' , '<>' , '')
                ->orderBy('id' , 'DESC')
                ->paginate(6);
        }else if ($lan == 'ar'){
            $allNews = News::with('newsImg')
                ->where('nState' , '=' , 1)
                ->where('nArSubject' , '<>' , '')
                ->where('nArBriefDescription' , '<>' , '')
                ->where('nArDescription' , '<>' , '')
                ->orderBy('id' , 'DESC')
                ->paginate(6);
        }
        return view('pages.news' , ['allNews' => $allNews ,
            'newsSlider' => $newsSlider ,
            'advertise' => $advertise ,
            'lan' => $lan]);
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
        if (Advertise::where('aState' , '=' , 1)->count() > 0)
            $advertise = Advertise::where('aState' , '=' , 1)->with('gallery')->first();
        else
            $advertise = null;
        News::find($nId)->increment('nViewedCount');
        $news = News::with('newsImg')->where('id' , '=' , $nId)->first();
        return view('pages.newsInfo' , ['news' => $news ,
            'advertise' => $advertise ,
            'lan' => $lan]);
    }
}
