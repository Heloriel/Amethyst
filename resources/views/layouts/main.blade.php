<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PLACEHOLDER</title>

        {{-- Custom CSS --}}
        <link rel="stylesheet" href="css/global.css">
        @yield('header')

        {{-- ICONS --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
      </head>

    <body class="antialiased">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="img/Logo.svg" alt="Logo" height="25"  /></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="nav-item header-end-point">
                  <div class="col-10">
                    <form class="d-flex">
                        <div>
                            <input class="form-control me-2 rounded-pill navbar-search" type="search" placeholder="PROCURAR..." aria-label="Search">
                        </div>
                    </form>
                  </div>
                  <div class="col-1">
                    <div class="dropdown dropdown-menu-left">
                        <a href="" class="" href="#" role="button" id="dropdownNotify" data-bs-toggle="dropdown" aria-expanded="false">
                          <ion-icon name="notifications-outline"></ion-icon>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownNotify">
                          <li></li>
                        </ul>
                      </div>
                  </div>
                  <div class="col-1">
                    <img src="img/Logo.svg" class="rounded-circle user-avatar" alt="Business Logo" width="35" height="35">
                  </div>
              </div>
            </div>
          </nav>

          <main>
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 d-sm-none d-md-block sidebar">
                            <div class="row sb-main-row text-center">
                              <div class="row first-block">
                                <div class="col-12">
                                  <a href="" class="text-white">HOME</a>
                                </div>
                              </div>
                              <div class="row second-block">
                                <div class="col-12">
                                  <a href="" class="text-white">CADASTRAR</a>
                                </div>                                
                              </div>
                              <div class="row third-block">
                                <div class="col-12">
                                  <a href="" class="text-white">GERENCIAR</a>
                                </div>
                              </div>
                              <div class="row last-block">
                                <div class="col-12">
                                  <a href="" class="text-white">RECOLHER</a>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-md-10 main-frame">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


