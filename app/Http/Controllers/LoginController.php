<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function store(Request $request)
    {

        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('admin');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }


    public function loginout()
    {
        Auth::logout();
        return redirect(route('login.index'));
    }
}
