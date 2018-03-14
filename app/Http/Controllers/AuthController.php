<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginFrom()
    {
        //echo Hash::make('gholami@1234');
        if (Auth::guest())
            return view('pages.admin.login');
        else
            return redirect()->to('/admin');
    }

    public function signIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required', 'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember')))
        { //this if validate if the user is on the database line 1
            return redirect()->to('/admin/news');
            //this redirect if user is the db line 2
        }

        return redirect('/admin/login')
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'err' => 'نام کاربری یا کلمه عبور اشتباه است!',
            ]);
    }

    public function signOut()
    {
        Auth::logout();
        return redirect()->to('/admin/login');
    }
}
