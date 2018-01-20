<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\MainMenu;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $mainMenus = MainMenu::where('mmState' , '=' , true)->get();
            view()->share('mainMenus', $mainMenus);
            return $next($request);
        });

    }
}
