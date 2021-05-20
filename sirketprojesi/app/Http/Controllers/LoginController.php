<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');    }

    public function depolama(Request $request)
    {
        if (!auth()->attempt($request->only(['email', 'password']),$request->remember)) {
            return back()->with('status','The email or password is incorrect, please try again');
        }

        return redirect()->route('index');
    }
}
