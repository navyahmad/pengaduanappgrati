<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {   
        $created = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($created)) {
            $request->session()->regenerate();

            return redirect()->intended('/beranda');
        }
        return back()->with('loginError', 'Login Failed!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
