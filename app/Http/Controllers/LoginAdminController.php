<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request['username'] == 'admin' && $request['password'] == 'admin') {

            session()->put('login', 'ada');
            return redirect()->intended('/dashboard');
        }
        return back();
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('/login');
    }
}
