<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - @yield('title')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="css/global.css">
    @yield('css')

    {{-- ICONS --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- JQUERY UI CSS --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/Logo.svg" alt="Logo" height="25" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-item header-end-point">
                <div class="col-7"></div>
                <div class="col-4">
                    <form class="">
                        <div>
                            <input class="form-control me-2 rounded-pill navbar-search" type="search" placeholder="PROCURAR..." aria-label="Search">
                        </div>
                    </form>
                </div>
                <div class="col-1 d-flex" id="user-area">
                    <div class="dropdown dropdown-menu-left">
                        <a href="" class="" role="button" id="dropdownNotify" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle notification-counter">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                            <ion-icon name="notifications-outline" role="img" class="md hydrated" aria-label="notifications outline"></ion-icon>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownNotify">
                            <li></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="d-none d-sm-flex flex-column flex-shrink-0 p-3 bg-light sidebar" style="width: 250px;" >
                    <ul class="nav nav-pills flex-column mb-auto">
                      <li class="nav-item">
                        <a href="/home" class="nav-link {{ request()->is('home') ? 'active' : '' }} d-flex link-dark">
                          <ion-icon name="home-outline"></ion-icon> <span class="me-1">
                          HOME
                        </a>
                      </li>
                      <li>
                        <a href="/manager" class="nav-link {{ (request()->is('manager')) ? 'active' : '' }} link-dark d-flex">
                          <ion-icon name="create-outline"></ion-icon> <span class="me-1">
                          GERENCIAR
                        </a>
                      </li>
                      <li>
                        <a href="/addnew" class="nav-link {{ (request()->is('addnew')) ? 'active' : '' }} link-dark d-flex">
                          <ion-icon name="add-circle-outline"></ion-icon>
                          ADICIONAR
                        </a>
                      </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/Logo.svg" alt="" width="32" height="32" class="rounded-circle me-2 user-avatar">
                        <strong>Scriplex</strong>
                      </a>
                      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                      </ul>
                    </div>
                  </div>

                <div class="col py-3 main-frame">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>


    <footer>

    </footer>

    {{-- Custom JavaScript --}}
    <script src="js/global.js"></script>

    {{-- BOOTSTRAP JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>

    @yield('afterFooter')

</body>

</html>
