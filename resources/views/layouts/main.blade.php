<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - @yield('title')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="/css/global.css">
    @yield('css')

    {{-- ICONS --}}
    <script src="https://unpkg.com/feather-icons"></script>

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

    @include('layouts.header')

    <main>
        <div class="container-fluid">
            <div class="row flex-nowrap main-row">

                @include('layouts.sidebar')

                <div class="col py-3 main-frame overflow-auto">

                  @yield('content')

                  @if (session('alert'))
                    <div class="col-12 m-0 d-flex justify-content-center global-alert">
                        <div class="alert @if(session('type'))alert-{{ session('type') }}@else alert-primary @endif alert-dismissible fade show p-0" role="alert" style="width: 90%">
                            <div class="p-3">
                                @if (session('aicon'))
                                    <i data-feather="{{session('aicon')}}"></i>
                                @endif
                                {{session('alert')}}
                                <button type="button" class="btn-close align-self-end" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-{{ session('type') }}" role="progressbar" style="width: 0%;"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                  @endif

                </div>
            </div>
        </div>
    </main>

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>

    {{-- Custom JavaScript --}}
    <script src="/js/global.js"></script>

    {{-- BOOTSTRAP JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    @yield('afterFooter')

</body>

</html>
