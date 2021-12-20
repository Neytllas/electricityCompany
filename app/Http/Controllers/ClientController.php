<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function submit(ClientRequest $req){
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

    public function checkLogin()
    {
        $email = DB::table('clients')->where('Email', $_REQUEST['Email'])->value('Email');
        $surname = DB::table('clients')->where('Surname', $_REQUEST['Surname'])->value('Surname');
        if($email!=null and $surname!=null)
        {
          $id = DB::table('clients')->where('Email', $_REQUEST['Email'])->value('id');
          return view('personal-account', ['data'=>  Client::find($id)]);
        }
    }

    public function  showPassword()
    {
        $surname = DB::table('clients')->where('Email', $_REQUEST['Email'])->value('Surname');
        if($surname!=null)
        {
         return view('message')->with('success', 'Пароль');
        }
        return view('forgotLogin')->with('success', 'Пользователя с таким email не существует!');
    }
   
}
