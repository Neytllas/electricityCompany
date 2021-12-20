@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')
@include('includes.header')
@include('includes.messages')

      <div class="container">
<!-- TODO change img class -->
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
          <div class="col-auto d-flex align-items-center flex-column border">
            <div><img src="/images/appliance.svg" alt="" /></div>
            <div class="text-card">
              Меркурий
              <p>201.7-1</p>
              <p>№: 037369914</p>
            </div>
          </div>

          <div class="col-auto d-flex align-items-center flex-column border">
            <div><img src="/images/appliance.svg" alt="" /></div>
            <div class="text-card">
              Меркурий
              <p>201.7-1</p>
              <p>№: 037369914</p>
            </div>
          </div>

          <div class="col-auto d-flex align-items-center flex-column border">
            <div><img src="/images/appliance.svg" alt="" /></div>
            <div class="text-card">
              Меркурий
              <p>201.7-1</p>
              <p>№: 037369914</p>
            </div>
          </div>

          <div class="col-auto d-flex align-items-center flex-column border">
            <div><img src="/images/appliance.svg" alt="" /></div>
            <div class="text-card">
              Меркурий
              <p>201.7-1</p>
              <p>№: 037369914</p>
            </div>
          </div>

          <div class="col-auto d-flex align-items-center flex-column border">
            <div><img src="/images/appliance.svg" alt="" /></div>
            <div class="text-card">
              Меркурий
              <p>201.7-1</p>
              <p>№: 037369914</p>
            </div>
          </div>

          <div class="col-auto d-flex align-items-center flex-column border">
            <div><img src="/images/appliance.svg" alt="" /></div>
            <div class="text-card">
              Меркурий
              <p>201.7-1</p>
              <p>№: 037369914</p>
            </div>
          </div>

          <div class="col-auto d-flex align-items-center flex-column border">
            <div><img src="/images/appliance.svg" alt="" /></div>
            <div class="text-card">
              Меркурий
              <p>201.7-1</p>
              <p>№: 037369914</p>
            </div>
          </div>
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

    <div class="container container-info">
      <h3>Передача новых показаний</h3>

      <div class="info">
        <div>
          <img class="info-img" src="/images/warning.svg" alt="">
          Рекомендуем передавать показания приборов учета до 25 числа. Показания, переданные после 25 числа, не будут приняты к расчету в этом месяце.
        </div>
      </div>

    <h4>Текущий расход: <span style="font-weight: bold;">-5617 (кВт.ч) </span> </h4>
    </div>

    <!-- TODO fix that block -->
    <div class="container table">
    <div>
      <img class="" src="/images/photo.svg" alt="">
     <span class="text-table">Загрузить показания с фото</span> 
    </div>
    </div>

    <div class="container container-table-2">
      <h4 class="h4-text">или</h4>

      <!-- TODO fix text -->
      <div class="table-2">
        <div class="input-group">
          <input
            type="text"
            name=""
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            placeholder="Введите показания с прибора"
          />
        </div>
    </div>

    <div class="btn-insert">
      <button type="button" class="btn btn-danger">Передать показание</button>
    </div>
    </div>

    <!-- Footer -->
<footer class="text-center text-white" style="background-color:#f7f7f7;">
  <!-- Grid container -->
  <div class="container p-4">

     <!-- Section: Text -->
     <section class="mb-4">
      <p>
        <h3>TEXT</h3>
  TEXT
      </p>
    </section>
    <!-- Section: Text -->



  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #043D7D;">
    © 2021 Copyright:
    <a class="text-white" href="#">TEXT</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

@include('includes.footer')
@endsection