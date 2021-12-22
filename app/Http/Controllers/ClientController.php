<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\History;
use App\Models\Meter;


class ClientController extends Controller
{

    function show(Request $request)
    {
        return view("login", ["title" => "Авторизация"]);
    }

    function login(Request $request) // Авторизация
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();

            return redirect("/");
        }
    }

    function logout(Request $request) // Выход
    {
        Auth::logout();

        $request-> session()->invalidate();

        $request-> session()->regenerateToken();

        return redirect("/");
    }

    function __construct()
    {
        $this->middleware("login");
    }

    public function submit(ClientRequest $req)
    {
        $contact = new Client();
        $contact->Surname = $req->input('Surname');
        $contact->Name = $req->input('Name');
        $contact->MiddleName = $req->input('MiddleName');
        $contact->PhoneNumber = $req->input('PhoneNumber');
        $contact->Email = $req->input('Email');
        $contact->City = $req->input('City');
        $contact->Street = $req->input('Street');
        $contact->HouseNumber = $req->input('HouseNumber');
        $contact->Flat = $req->input('Flat');
        $contact->NumberRooms = $req->input('NumberRooms');
        $contact->NumberTenats = $req->input('NumberTenats');
        $contact->Login = $req->input('Login');

        $contact->save();
        return redirect()->route('message')->with('success', 'Показания успешно отправлены!');
    }


    public function index()
    {
        $items = Meter::all();

        return view('main', [
            "items" => $items
        ]);
    }

    public function history()
    {
        $items = History::all();

        return view('history', [
            "items" => $items
        ]);
    }

    public function edit_form()
    {
        return view('profile');
    }
}
