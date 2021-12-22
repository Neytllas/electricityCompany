<nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container"> 
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="navbar-brand d-flex " href="#"
                  ><img src="/images/logo.svg" alt="logo"
                /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profile">Личный кабинет</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/history">История</a>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                {{ $client->Name }}
              </div>
            </li>
            <li class="nav-item">
              @auth
              <a class="nav-link active" aria-current="page" href="/logout">Выйти</a>
              @endauth
            </li>
            <li class="nav-item">
              @guest
              <a class="nav-link active" aria-current="page" href="/login">Войти</a>
              @endauth
            </li>
          </ul>
        </div>
  </nav>