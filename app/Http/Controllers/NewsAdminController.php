<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class NewsAdminController extends Controller
{
    function index()
    {
        return view('pages/admin/adminLayout');
    }
    function album()
    {
        return view('pages/admin/album');
    }
}
