<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container"> 
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="navbar-brand d-flex " href="#"
                  ><img src="/images/logo.svg" alt="logo"
                /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Личный кабинет</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">История</a>
            </li>
          </ul>
        </div>
  </nav>

  @yield('content')
  </body>
</html>