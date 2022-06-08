@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')

    <div class="container">
        <div class="wrapper">
            <div class="ellement">
                <img src="/images/lightning.svg" class="img-ell" alt="" />
                <h1>Электроэнергия</h1>
            </div>

            <div class="ellement">
                <img src="/images/counter.svg" class="img-ell" alt="" />
                <h2>Ваши приборы учета</h2>
            </div>
        </div>

        <div class="wrapper">
            <div class="row d-flex justify-content-around">
                @foreach ($items as $item)

                    <div class="col-auto d-flex align-items-center flex-column border">
                        <div><img src="/images/appliance.svg" alt="" /></div>
                        <div class="text-card">
                            {{ $item->NameMeter }}
                            <p>{{ $item->updated_at }}</p>
                            <p>№: {{ $item->tariffs_id }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container container-indication">


        <div class="row row-indication">
            <div class="col img-indication">
                <img src="/images/chart.svg" alt="" />Показания
            </div>
            <div class="col text-indication">за период 25.06-25.08</div>
        </div>



        <div class="row row-lighting">
            <div class="col col-lighting" style="border-radius: 10px 0 0 10px;"><img src="/images/lighting_white.svg"
                    alt=""></div>
            <div class="col col-lighting"><img src="/images/lighting_white.svg" alt=""></div>
            <div class="col col-lighting" style="border-radius: 0 10px 10px 0;"><img src="/images/lighting_white.svg"
                    alt=""></div>
        </div>

        <div class="row row-arrow">
            @foreach ($results as $item)
                <div class="col col-arrow">
                    <div class="col col-arrow"><img src="/images/arrow_green.svg" alt="" />{{ $item->summed }}кВт.ч</div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container container-info">
        <h3>Передача новых показаний</h3>

        <div class="info">
            <div>
                <img class="info-img" src="/images/warning.svg" alt="">
                Рекомендуем передавать показания приборов учета до 25 числа. Показания, переданные после 25 числа, не
                будут приняты к расчету в этом месяце.
            </div>
        </div>

        <h4>Текущий расход: <span style="font-weight: bold;">{{ $last_indication->indication }} (кВт.ч) </span> </h4>
    </div>

    <div class="container table">
        <div>
            <img class="" src="/images/photo.svg" alt="">
            <span class="text-table">Загрузить показания с фото</span>
        </div>
    </div>

    <div class="container container-table-2">
        <h4 class="h4-text">или</h4>

        <form action="/indication" method="POST">
            @csrf
            <div class="table-2">
                <select class="form-select me-2"  aria-label="Default select example" name="meter_id">
                    @foreach ($items as $item)
                        <option value="{{ $item->id }}">{{ $item->NameMeter }}</option>
                    @endforeach
                  </select>
                <div class="input-group">
                    <input type="text" name="value" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" placeholder="Введите показания с прибора" />
                </div>
            </div>
            <div class="btn-insert">
                <button type="submit" class="btn btn-danger">Передать показание</button>
               </div> 
        </form>    
    </div>





@endsection
