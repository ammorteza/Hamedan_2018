<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\ImageGallery;
use Hamedan_2018\News;
use Hamedan_2018\NewsImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class NewsAdminController extends Controller
{
    function index()
    {

    }

    function news()
    {
        $allNews = News::with('newsImg')->orderBy('id' , 'DESC')->paginate(6);
        return view('pages.admin.allNews' , ['allNews' => $allNews]);
    }

    function registerForm()
    {
        $gallery = ImageGallery::orderBy('id' , 'DESC')->get();
        return view('pages.admin.registerNews' , ['gallery' => $gallery]);
    }

    function register(Request $request)
    {
        $news = new News;
        $news->nFaSubject = $request->faSubject;
        $news->nEnSubject = $request->enSubject;
        $news->nArSubject = $request->arSubject;
        $news->nFaBriefDescription = $request->faBriefDescription;
        $news->nEnBriefDescription = $request->enBriefDescription;
        $news->nArBriefDescription = $request->arBriefDescription;
        $news->nFaDescription = $request->faDescription;
        $news->nEnDescription = $request->enDescription;
        $news->nArDescription = $request->arDescription;
        $news->nState = $request->displayState == '' ? 0 : 1;
        $news->save();

        $newsImg = new NewsImg;
        $newsImg->niNId = $news->id;
        $newsImg->niGId = $request->selectedImageId;
        $newsImg->niFaAlt = $request->faSubject;
        $newsImg->niEnAlt = $request->enSubject != '' ? $request->enSubject : '--';
        $newsImg->niArAlt = $request->arSubject != '' ? $request->arSubject : '--';
        $newsImg->save();

        $allNews = News::with('newsImg')->orderBy('id' , 'DESC')->paginate(6);
        return Redirect::back()->with(['allNews' => $allNews]);

    }

    public function delete($nId)
    {
        NewsImg::where('niNId' , '=' , $nId)->delete();
        News::where('id' , '=' , $nId)->delete();
        $allNews = News::with('newsImg')->orderBy('id' , 'DESC')->paginate(6);
        return Redirect::back()->with(['allNews' => $allNews]);
    }

    function update($nId)
    {
        $gallery = ImageGallery::orderBy('id' , 'DESC')->get();
        $news = News::where('id' , '=' , $nId)->with('newsImg.gallery')->first();
        return view('pages.admin.updateNews' , ['news' => $news , 'gallery' => $gallery]);
    }

    function changeDisplayState($nId , $state)
    {
        News::where('id' , '=' , $nId)->update(['nState' => $state]);
        $allNews = News::with('newsImg')->orderBy('id' , 'DESC')->paginate(6);
        return Redirect::back()->with(['allNews' => $allNews]);
    }

    function newsSlider()
    {
        return view('pages.admin.newsSlider');
    }

    function registerNewsSlider()
    {
        return view('pages.admin.registerNewsSlider');
    }
}
