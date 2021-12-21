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
            <li>
              {{ $client->Name }}
            </li>
          </ul>
        </div>
  </nav>