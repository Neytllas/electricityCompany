@extends('layouts.app')

@section('title')Введите код подтверждения@endsection

@section('content')

<div class="d-flex vh-100 w-100 align-items-center justify-content-center">
    <form action=""  method="POST">
        @csrf
        <input type="hidden" name="history_id" value="{{$history_id}}">
        <label for="">ВВЕДИТЕ КОД
            <input type="text" class="form-control form-control-lg" name="confirmation_code">
        </label>
        <div>
            <button class="btn btn-primary mt-2 w-100">Отправить</button>
        </div>
    </form>
</div>

@endsection