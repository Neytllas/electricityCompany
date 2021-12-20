@extends('layouts.app')

@section('title')Личный кабинет@endsection

@section('content')
@include('includes.header')
<div class="wrapper">
  <h1>Личный кабинет</h1>
  @include('includes.messages')
  <form action="{{route('client-form')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="Name">Имя</label>
    <input type="text" name="Name" placeholder="Введите имя" id="Name" class="form-control" value="{{$data->Surname}}">
  </div>

  <div class="form-group">
    <label for="Surname">Фамилия</label>
    <input type="text" name="Surname" placeholder="Введите фамилию" id="Surname" class="form-control" value="{{$data->Name}}">
  </div>

  <div class="form-group">
    <label for="MiddleName">Отчество</label>
    <input type="text" name="MiddleName" placeholder="Введите отчество" id="MiddleName" class="form-control" value="{{$data->MiddleName}}">
  </div>

  <div class="form-group">
    <label for="PhoneNumber">Телефон</label>
    <input type="text" name="PhoneNumber" placeholder="Введите телефон" id="PhoneNumber" class="form-control" value="{{$data->PhoneNumber}}">
  </div>

  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" name="Email" placeholder="Введите email" id="Email" class="form-control" value="{{$data->Email}}">
  </div>

  <div class="form-group">
    <label for="City">Город</label>
    <input type="text" name="City" placeholder="Введите город" id="City" class="form-control" value="{{$data->City}}">
  </div>

  <div class="form-group">
    <label for="Street">Улица</label>
    <input type="text" name="Street" placeholder="Введите улицу" id="Street" class="form-control" value="{{$data->Street}}">
  </div>

  <div class="form-group">
    <label for="HouseNumber">Дом</label>
    <input type="text" name="HouseNumber" placeholder="Введите номер дома" id="HouseNumber" class="form-control" value="{{$data->HouseNumber}}">
  </div>

  <div class="form-group">
    <label for="Flat">Квартира</label>
    <input type="text" name="Flat" placeholder="Введите номер квартиры" id="Flat" class="form-control" value="{{$data->Flat}}">
  </div>

  <div class="form-group">
    <label for="NumberRooms">Количество комнат</label>
    <input type="text" name="NumberRooms" placeholder="Введите количество комнат" id="NumberRooms" class="form-control" value="{{$data->NumberRooms}}">
  </div>

  <div class="form-group">
    <label for="NumberTenats">Число жильцов</label>
    <input type="text" name="NumberTenats" placeholder="Введите число жильцов" id="NumberTenats" class="form-control" value="{{$data->NumberTenats}}">
  </div>

  <div class="form-group">
    <label for="Login">Индивидуальный номер счета</label>
    <input type="text" name="Login" placeholder="Введите индивидуальный номер счета" id="Login" class="form-control" value="{{$data->Login}}">
  </div>
 </div>
 <button type="submit" class="btn btn-success">Сохранить</button> 
 </form>
 <button type="button" class="btn btn-success">Редактировать</button>
@include('includes.footer')
@endsection
