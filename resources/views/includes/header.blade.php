@auth
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="navbar-brand d-flex " href="#"><img src="/images/logo.svg" alt="logo" /></a>
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
            </ul>

            <ul class="nav nav-pills">
                <li class="nav-item me-4">
                    <div class="navbar-text">
                        Здравствуйте, {{ $client->Name }}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/logout">Выйти</a>
                </li>
            </ul>
        </div>
    </nav>

@endauth
