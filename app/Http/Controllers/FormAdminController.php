<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class FormAdminController extends Controller
{
    function form($fId)
    {
        $allNews = News::with('newsImg')->orderBy('id' , 'DESC')->paginate(6);
        return view('pages.admin.allForms' , ['allNews' => $allNews]);
    }
}
