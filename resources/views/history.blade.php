@extends('layouts.app')

@section('title')История платежей@endsection

@section('content')
@include('includes.header')
<div class="container">
          <div class="container container-indication">
            <div class="main-text-history">
                <img src="/images/chart.svg" alt="" />Показания с <span class="text-history">25.06 по 25.08</span>
              </div>
      
            <div class="row row-lighting">
              <div class="col col-lighting" style="border-radius: 10px 0 0 10px;"><img src="/images/lighting_white.svg" alt=""></div>
              <div class="col col-lighting"><img src="/images/lighting_white.svg" alt=""></div>
              <div class="col col-lighting" style="border-radius: 0 10px 10px 0;"><img src="/images/lighting_white.svg" alt=""></div>
            </div>
      
            <div class="row row-arrow">
              <div class="col col-arrow"><img src="/images/arrow_green.svg" alt="">2100 кВт.ч</div>
              <div class="col col-arrow"><img src="/images/arrow_red.svg" alt="">2100 кВт.ч</div>
              <div class="col col-arrow"><img src="/images/arrow_green.svg" alt="">2100 кВт.ч</div>
          </div>
          </div>


              <div class="main-text-history">
                25 октября 2021
              </div>

          <div class="piece-of-history">
              <div class="history-icon"></div>
              <p class="history-text">
                <span>Электроэнергия</span>
                По телефону
              </p>

              <div>
                <p class="history-text-2">
                Показания: 4752 квТ.ч
                Расход: 82 кВт.ч
              </p>
          </div>     
    </div>
    @include('includes.footer')
@endsection

    