@extends('layouts.app')

@section('title')
    Отправка показаний
@endsection

@section('content')
    <div class="container">
        <div class="wrapper">
            <h1>Отправка показаний</h1>
            <form action="{{ route('send_indication') }}" method="POST">
              @csrf
                <div class="row">

                    <div class="row">
                        <div class="col fields">
                            <div class="input-text">Имя</div>
                            <div class="input-group mb-3">
                                <input type="text" name="Name" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" placeholder="Введите имя" />
                            </div>
                        </div>

                        <div class="col fields">
                            <div class="input-text">Фамилия</div>
                            <div class="input-group mb-3">
                                <input type="text" name="Surname" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" placeholder="Введите фамилию" />
                            </div>
                        </div>

                        <div class="col fields">
                            <div class="input-text">Отчество</div>
                            <div class="input-group mb-3">
                                <input type="text" name="MiddleName" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="Введите отчество" />
                            </div>
                        </div>
                    </div>

                    <hr />


                    <div class="row">
                        <div class="col fields">
                            <div class="input-text">Город</div>
                            <div class="input-group mb-3">
                                <input type="text" name="City" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" placeholder="Введите город" />
                            </div>
                        </div>

                        <div class="col fields">
                            <div class="input-text">Улица</div>
                            <div class="input-group mb-3">
                                <input type="text" name="Street" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" placeholder="Введите улицу" />
                            </div>
                        </div>

                        <div class="col fields">
                            <div class="input-text">Дом</div>
                            <div class="input-group mb-3">
                                <input type="text" name="HouseNumber" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="Введите дом" />
                            </div>
                        </div>

                        <div class="col fields">
                            <div class="input-text">Квартира</div>
                            <div class="input-group mb-3">
                                <input type="text" name="Flat" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" placeholder="Введите номер квартиры" />
                            </div>
                        </div>
                    </div>


                    <hr />

                    <div class="row">
                        <div class="col fields">
                            <div class="input-text">Индивидуальный номер счета</div>
                            <div class="input-group mb-3">
                                <input type="text" name="Login" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default"
                                    placeholder="Введите индивидуальный номер счета" />
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col fields">
                            <div class="input-text">Показания с прибора</div>
                            <div class="input-group mt-3">
                                <input type="text" name="indication" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="Введите показания с прибора" />
                            </div>
                        </div>
                    </div>

                    <div class="btn-insert">
                        <button type="submit" class="btn btn-danger">Передать показание</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
