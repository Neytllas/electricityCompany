<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use App\Models\History;
use App\Models\Meter;


class ClientController extends Controller
{

    function __construct()
    {
        $this->middleware("auth");
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

    public function checkLogin()
    {
    }

    public function  showPassword()
    {
    }
}
