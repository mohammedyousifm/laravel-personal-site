<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;


class SignInController extends Controller
{
    public function signIn()
    {
        return view('auth/sign-in');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Ensure the email is unique in the `users` table
            'password' => 'required|min:6', // Minimum password length validation
        ]);

        // Hash the password before storing it in the database
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);
    }
}
