<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;


class LoginController extends Controller
{
    function show(Request $request)
    {
        return view("login", ["title" => "Авторизация"]);
    }

    function login(Request $request) // Авторизация
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) 
        {
            session(['client' => Client::query()->where("user_id", Auth::id())->first()->id]);

            return redirect("/");
        }

        return redirect("/login");
    }

    function logout(Request $request) // Выход
    {
        Auth::logout();

        $request-> session()->invalidate();

        $request-> session()->regenerateToken();

        return redirect("/");
    }

}
