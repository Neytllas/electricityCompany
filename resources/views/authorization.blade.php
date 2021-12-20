@extends('layouts.app')

@section('title')Авторизация@endsection


@section('content')
    <div class="wrapper-authorization">
    <form action="{{route('client-authorization')}}" method="post">
  @csrf
      <div class="text-center">
        <img src="/images/logo.svg" class="logo" alt="logo">
      </div>
      
      <div class="iput-auth row">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="Email" placeholder="Введите email " aria-label="Введите email " aria-describedby="basic-addon2">
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" name="Surname" placeholder="Введите пароль" aria-label="Введите пароль" aria-describedby="basic-addon2">
          </div>
      </div>

      <div class="button-auth">
        <button type="submit" class="btn btn-primary">Войти</button>
      </div>

      <div class="text-auth">
      <a href="/forgotLogin">Забыли email или пароль?</a>
      </div>
      <div class="text-without-auth">
        <a href="{{route('personal-area')}}">Отправить показания без авторизации</a>
      </div>
      </form>
    </div>
  @endsection
