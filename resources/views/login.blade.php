@extends('layouts.app')

@section('title')Страница авторизации@endsection

@section('content')

    <div class="wrapper-authorization">

        <div class="text-center">
            <img src="images/logo.svg" class="logo" alt="logo">
        </div>

        <form action="" method="POST">

            @csrf

            <div class="iput-auth row">     {{--  Поле ввода логина --}}
                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Введите email " aria-label="Введите email "
                        aria-describedby="basic-addon2">
                </div>

                <div class="input-group mb-3">   {{--  Поле ввода пароля --}}
                    <input type="password" name="password" class="form-control" placeholder="Введите пароль" aria-label="Введите пароль"
                        aria-describedby="basic-addon2">
                </div>
            </div>
            <div class="button-auth">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
        </form>


        

        <div class="text-auth">Забыли email или пароль?</div>

        <div class="text-without-auth"><a href="{{route('wauth')}}">Отправить показания без авторизации</a></div>
    </div>

@endsection
