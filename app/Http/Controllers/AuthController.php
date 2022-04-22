<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\History;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function wauth()
    {
        return view('wauth');
    }

    public function send_indication(Request $request)
    {
        $request->validate([
            'Name' => 'required'
        ], [
            'Name.required' => 'Имя обязательно к заполнению'
        ]);
        $request->validate([
            'Surname' => 'required'
        ], [
            'Surname.required' => 'Фамилия обязательна к заполнению'
        ]);
        $request->validate([
            'MiddleName' => 'required'
        ], [
            'MiddleName.required' => 'Отчество обязательно к заполнению'
        ]);
        $request->validate([
            'City' => 'required'
        ], [
            'City.required' => 'Город обязателен к заполнению'
        ]);
        $request->validate([
            'Street' => 'required'
        ], [
            'Street.required' => 'Улица обязательна к заполнению'
        ]);
        $request->validate([
            'HouseNumber' => 'required'
        ], [
            'HouseNumber.required' => 'Номер дома обязателен к заполнению'
        ]);
        $request->validate([
            'Flat' => 'required'
        ], [
            'Flat.required' => 'Номер квартиры обязателен к заполнению'
        ]);
        $request->validate([
            'Login' => 'required'
        ], [
            'Login.required' => 'Индивидуальный номер счета обязателен к заполнению'
        ]);

        $client = Client::query()
            ->where("Name", $request->input("Name"))
            ->where("Surname", $request->input("Surname"))
            ->where("MiddleName", $request->input("MiddleName"))
            ->where("City", $request->input("City"))
            ->where("Street", $request->input("Street"))
            ->where("HouseNumber", $request->input("HouseNumber"))
            ->where("Flat", $request->input("Flat"))
            ->where("Login", $request->input("Login"))
            ->first();

        $history = new History();
        $history->date = Carbon::now();
        $history->send_type = "По компьютеру";
        $history->indication = $request->input("indication");
        $history->title = "Электронергия";
        $history->client_id = $client->id;

        $history->save();

        return redirect()->back();;
    }
}
