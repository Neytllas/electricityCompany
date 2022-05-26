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
use Illuminate\Support\Facades\Session;

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

        $results = history ::selectRaw('EXTRACT( YEAR_MONTH FROM date ) as period, SUM(indication) as summed')
            ->groupByRaw('EXTRACT( YEAR_MONTH FROM date)')
            ->orderByRaw('1')
            ->limit(3)
            ->get();

        return view('main', [
            "items" => $items,
            "last_indication" => $last_indication,
            "results" => $results
        ]);
    }

    public function history()
    {
        $client = Client::firstWhere("user_id",  Auth::id());
        $items = History::query()->where("client_id", $client->id)->orderBy("date")->get();
        $last_value = 0;
        foreach($items as $item) {
            $item->delta = $item->indication - $last_value;
            $last_value = $item->indication;
        }
        
        $results = history ::selectRaw('EXTRACT( YEAR_MONTH FROM date ) as period, SUM(indication) as summed')
            ->groupByRaw('EXTRACT( YEAR_MONTH FROM date)')
            ->orderByRaw('1')
            ->limit(3)
            ->get();

        return view('history', [
            "items" => $items->reverse(),
            "results" => $results
        ]);
    }

    public function edit_form()
    {
        return view('profile');
    }

    public function edit_user(Request $request)
    {
        $request->validate([
            'Name' => 'required'
        ],[
            'Name.required' => 'Имя обязательно к заполнению'
        ]);
        $request->validate([
            'Surname' => 'required'
        ],[
            'Surname.required' => 'Фамилия обязательна к заполнению'
        ]);
        $request->validate([
            'MiddleName' => 'required'
        ],[
            'MiddleName.required' => 'Отчество обязательно к заполнению'
        ]);
        $request->validate([
            'PhoneNumber' => 'required'
        ],[
            'PhoneNumber.required' => 'Номер телефона обязателен к заполнению'
        ]);
        $request->validate([
            'Email' => 'required'
        ],[
            'Email.required' => 'Email обязателен к заполнению'
        ]);
        $request->validate([
            'City' => 'required'
        ],[
            'City.required' => 'Город обязателен к заполнению'
        ]);
        $request->validate([
            'Street' => 'required'
        ],[
            'Street.required' => 'Улица обязательна к заполнению'
        ]);
        $request->validate([
            'HouseNumber' => 'required'
        ],[
            'HouseNumber.required' => 'Номер дома обязателен к заполнению'
        ]);
        $request->validate([
            'Flat' => 'required'
        ],[
            'Flat.required' => 'Номер квартиры обязателен к заполнению'
        ]);
        $request->validate([
            'NumberRooms' => 'required'
        ],[
            'NumberRooms.required' => 'Количество комнат обязательно к заполнению'
        ]);
        $request->validate([
            'NumberTenats' => 'required'
        ],[
            'NumberTenats.required' => 'Количество жильцов обязательно к заполнению'
        ]);
        $request->validate([
            'Login' => 'required'
        ],[
            'Login.required' => 'Индивидуальный номер счета обязателен к заполнению'
        ]);

        $client = Client::query()->where("user_id", Auth::id())->first();

        $client->Surname = $request->input('Surname');
        $client->Name = $request->input('Name');
        $client->MiddleName = $request->input('MiddleName');
        $client->PhoneNumber = $request->input('PhoneNumber');
        $client->Email = $request->input('Email');
        $client->City = $request->input('City');
        $client->Street = $request->input('Street');
        $client->HouseNumber = $request->input('HouseNumber');
        $client->Flat = $request->input('Flat');
        $client->NumberRooms = $request->input('NumberRooms');
        $client->NumberTenats = $request->input('NumberTenats');
        $client->Login = $request->input('Login');

        $client -> save();

        return redirect()->back();;

    }

    public function edit_user_admit(Request $request)
    {
        Session::flash('admit');
        return redirect(Session::previousUrl());
    }
}
