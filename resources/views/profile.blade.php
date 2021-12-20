@extends('layouts.app')

@section('title')История операций@endsection

@section('content')
@include('includes.header')
@include('includes.messages')

<div class="container">
      <div class="wrapper">
          <h1>Личный кабинет</h1>
        <div class="fields">
            <div class="input-text">Имя</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите имя"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Фамилия</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите фамилию"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Отчество</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите отчество"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Телефон</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите номер телефона"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Email</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name="Email"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Ведите email"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Город</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите город"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Улица</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите улицу"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Дом</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите дом"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Квартира</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите номер квартиры"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Количество комнат</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите количество комнат"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Число жильцов</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите число жильцов"
            />
          </div>
        </div>

        <div class="fields">
            <div class="input-text">Индивидуальный номер счета</div>
          <div class="input-group mb-3">
            <input
              type="text"
              name=""
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"
              placeholder="Введите индивидуальный номер счета"
            />
          </div>
        </div>
      </div>

      <div class="button-save">
        <button type="button" class="btn btn-info">Редактировать</button>
        <button type="button" class="btn btn-warning">Сохранить</button>
      </div>
    </div>