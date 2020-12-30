<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('back_end.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $role = DB::table('users')->where('email', '=', "$request->email")->value('role');
        if (Auth::attempt($credentials)) {
            if ($role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home.index');
            }


        } else {
            return redirect()->route('login');

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
