<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\ImageGallery;
use Hamedan_2018\News;
use Hamedan_2018\NewsImg;
use Hamedan_2018\NewsSlider;
use Hamedan_2018\Permission;
use Hamedan_2018\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class NewsAdminController extends Controller
{
    public function __construct(User $user, Router $router)
    {
        $this->middleware(function ($request, $next) {
            $newsAcions = ['news' ,
                'registerForm' ,
                'register' ,
                'update' ,
                'delete' ,
                'updateForm' ,
                'changeDisplayState'];
            $sliderAcions = ['newsSlider' ,
                'registerNewsSlider' ,
                'registerNewsSliderForm' ,
                'deleteNewsSlider'];

            $actionName = explode('@', Route::getCurrentRoute()->getActionName())[1];
            if (in_array($actionName , $newsAcions))
            {
                if (!Permission::checkPermission('ADMIN_NEWS'))
                    return abort(404);
            }else if (in_array($actionName , $sliderAcions)){
                if (!Permission::checkPermission('ADMIN_NEWS_SLIDER'))
                    return abort(404);
            }
            return $next($request);
        });
    }

    function index()
    {
        return view('pages.admin.index');
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
        $news->nArSubject = $this->strReplace($request->arSubject);
        $news->nFaBriefDescription = $request->faBriefDescription;
        $news->nEnBriefDescription = $request->enBriefDescription;
        $news->nArBriefDescription = $this->strReplace($request->arBriefDescription);
        $news->nFaDescription = $request->faDescription;
        $news->nEnDescription = $request->enDescription;
        $news->nArDescription = $this->strReplace($request->arDescription);
        $news->nState = $request->displayState == '' ? 0 : 1;
        $news->save();

        $newsImg = new NewsImg;
        $newsImg->niNId = $news->id;
        $newsImg->niGId = $request->selectedImageId;
        $newsImg->niFaAlt = $request->faSubject;
        $newsImg->niEnAlt = $request->enSubject != '' ? $request->enSubject : '--';
        $newsImg->niArAlt = $request->arSubject != '' ? $request->arSubject : '--';
        $newsImg->save();

        return Redirect::to('/admin/news');

    }

    private function strReplace($str)
    {
        $currentStr = ['یّ ' , 'یّ، ', 'ی،' , 'زی ' , 'وی ' , 'دی ' , 'ذی ' , 'ری ' , 'ذّی ' , 'ای ' , 'ی»' , 'گ' , 'پ' , 'ژ' , 'چ' , 'ک'];
        $newStr = ['ى ' , 'ى، ' , 'ى،' , 'زى ' , 'وى ' , 'دى ' , 'ذى ' , 'رى ' , 'ذّى ' , 'اى ' , 'ى»' , 'ك' , 'ب' , 'ز' , 'ج' , 'ك'];
        return str_replace($currentStr , $newStr , $str);
    }

    function update($nId , Request $request)
    {
        $news = News::find($nId);
        $news->nFaSubject = $request->faSubject;
        $news->nEnSubject = $request->enSubject;
        $news->nArSubject = $this->strReplace($request->arSubject);
        $news->nFaBriefDescription = $request->faBriefDescription;
        $news->nEnBriefDescription = $request->enBriefDescription;
        $news->nArBriefDescription = $this->strReplace($request->arBriefDescription);
        $news->nFaDescription = $request->faDescription;
        $news->nEnDescription = $request->enDescription;
        $news->nArDescription = $this->strReplace($request->arDescription);
        $news->save();

        NewsImg::where('niNId' , '=' , $nId)->delete();

        $newsImg = new NewsImg;
        $newsImg->niNId = $news->id;
        $newsImg->niGId = $request->selectedImageId;
        $newsImg->niFaAlt = $request->faSubject;
        $newsImg->niEnAlt = $request->enSubject != '' ? $request->enSubject : '--';
        $newsImg->niArAlt = $request->arSubject != '' ? $request->arSubject : '--';
        $newsImg->save();

        return Redirect::to('/admin/news');

    }

    public function delete($nId)
    {
        NewsImg::where('niNId' , '=' , $nId)->delete();
        News::where('id' , '=' , $nId)->delete();
        $allNews = News::with('newsImg')->orderBy('id' , 'DESC')->paginate(6);
        return Redirect::back()->with(['allNews' => $allNews]);
    }

    function updateForm($nId)
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
        $newsSlider = NewsSlider::with('gallery')->get();
        return view('pages.admin.newsSlider' , ['newsSlider' => $newsSlider]);
    }

    function registerNewsSlider(Request $request)
    {
        $newsSlider = new NewsSlider;
        $newsSlider->nsFaAlt = $request->faSubject;
        $newsSlider->nsEnAlt = $request->enSubject;
        $newsSlider->nsArAlt = $request->arSubject;
        $newsSlider->nsGId = $request->selectedImageId;
        $newsSlider->save();

        return Redirect::to('/admin/news/slider');
    }

    function registerNewsSliderForm()
    {
        $gallery = ImageGallery::orderBy('id' , 'DESC')->get();
        return view('pages.admin.registerNewsSlider' , ['gallery' => $gallery]);
    }

    function deleteNewsSlider($nsId)
    {
        NewsSlider::where('id' , '=' , $nsId)->delete();
        return Redirect::to('/admin/news/slider');
    }
}
