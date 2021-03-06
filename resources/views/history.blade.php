@extends('layouts.app')

@section('title')История операций@endsection

@section('content')

    <div class="container">
        <div class="container container-indication">
            <div class="main-text-history">
                <img src="/images/chart.svg" alt="" />Показания с <span class="text-history">25.06 по 25.08</span>
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

        @foreach ($items as $item)
            <div class="main-text-history">
                {{ $item->date }}
            </div>


            <div class="container">


                <div class="row mb-3">

                    <div class="col history-icon"></div>
                    <div class="col-2 history-text">
                        <span class="piece-of-history">{{ $item->title }}</span>
                       @if($item->meter) {{ $item->meter->NameMeter }} @endif
                    </div>
                    <div class="col-2 history-text-2">
                        Показания: <strong>{{ $item->indication }} квТ.ч</strong>
                        <br>
                        Расход: <strong>{{ $item->delta }} кВт.ч</strong>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
