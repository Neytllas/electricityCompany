@extends('layouts.app')

@section('title')История операций@endsection

@section('content')
@include('includes.header')
@include('includes.messages')

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


    <div class="container">
      <div class="row ">
        <div class="col history-icon"></div>
        <div class="col-2 history-text">
        <span class="piece-of-history">Электроэнергия</span>   
          По телефону
        </div>
        <div class="col-2 history-text-2">
          Показания: <strong>4752 квТ.ч</strong> 
          <br>
          Расход: <strong>82 кВт.ч</strong> 
        </div>
      </div>
    </div>

@include('includes.footer')
@endsection