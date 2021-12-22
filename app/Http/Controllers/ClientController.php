<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\History;
use App\Models\Meter;
use Carbon\Carbon;


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

    public function add_indication(Request $request)
    {
        $value =$request->input("value");

        $history = new History();
        $history->date = Carbon::now();
        $history->send_type = "По компьютеру";
        $history->indication = $value;
        $history->title = "Электронергия";
        $history->client_id = session()->get("client");

        $history->save();

        return redirect("/history");
    }


    public function index()
    {
        $items = Meter::all();
        $last_indication = History::orderBy("date", "desc")->orderBy("id", "desc")->first();

        return view('main', [
            "items" => $items,
            "last_indication" => $last_indication
        ]);
    }

    public function history()
    {
        $items = History::orderBy("date")->get();
        $last_value = 0;
        foreach($items as $item) {
            $item->delta = $item->indication - $last_value;
            $last_value = $item->indication;
        }

        return view('history', [
            "items" => $items->reverse()
        ]);
    }

    public function edit_form()
    {
        return view('profile');
    }
}
