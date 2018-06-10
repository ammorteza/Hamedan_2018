<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    public function registerForm(Request $request)
    {
        $uniqueId = Uuid::uuid4();
        echo $uniqueId;
    }
}
