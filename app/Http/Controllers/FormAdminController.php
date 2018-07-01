<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;

class FormAdminController extends Controller
{
    function form($fId)
    {

        return view('pages.admin.allForms');
    }
}
