@extends('layouts.app')
@section('title')Передача показаний@endsection

@section('content')
<div class="wrapper-authorization">
<form action="{{route('client-show-password')}}" method="post">
  @csrf
      <div class="text-center">
        <img src="/images/logo.svg" class="logo" alt="logo">
      </div>
      
      <div class="iput-auth row">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="Email" placeholder="Введите email " aria-label="Введите email " aria-describedby="basic-addon2">
          </div>
      </div>
      @if(session('success'))
      <div class="alert alert-success">
       {{session('success')}}
       </div>
       @endif
      <div class="button-auth">
        <button type="submit" class="btn btn-primary">Показать пароль</button>
      </div>
      </form>
    </div>
@endsection

