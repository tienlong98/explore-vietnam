<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Shippori Mincho', serif !important;
        }
        .icon-language {
            width: 16px;
            height: auto;
            margin-right: 10px;
        }

        #progress {
            position: fixed;
            background: #03cc65;
            bottom: 20px;
            right: 10px;
            height: 70px;
            width: 70px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        #progress-value {
            display: block;
            height: calc(100% - 20px);
            width: calc(100% - 20px);
            background-color: #ffffff;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 35px;
            color: #001a2e;
        }

        .nav-link {
            font-family: 'Shippori Mincho', serif;
        }
    </style>
    @yield('css')

</head>

<body>
    <header>
        <div id="menu" class="menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="logo">
                        <ion-icon name="heart-outline" class="icon-1"></ion-icon>
                        <a class="text-logo" href="/">VietNam</a>
                        <ion-icon name="heart-outline" class="icon-2"></ion-icon>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">{{ __('?????????') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/listtour">{{ __('?????????') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('?????????') }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('listyama') }}">{{ __('????????????') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('listditich') }}">{{ __('????????????') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('listumi') }}">{{ __('???????????????') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">{{ __('???????????????') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">{{ __('??????????????????') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <ion-icon name="language-outline"></ion-icon>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item"
                                            href="{{ route('change_language', ['locale' => 'en']) }}"><img
                                                src="{{ asset('assets/images/us.png') }}"
                                                class="icon-language">{{ __('??????') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('change_language', ['locale' => 'jp']) }}"><img
                                                src="{{ asset('assets/images/japan.png') }}"
                                                class="icon-language">{{ __('?????????') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('????????????') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('??????') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                        <a class="dropdown-item" href="{{ url('booked') }}">Booked Tour</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>

                    </div>

                </div>
            </nav>
        </div>
    </header>



    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        <div class="d-flex justify-content-center">
            <div class="logo-footer d-flex mb-5">
                <ion-icon name="heart-outline" class="icon-3"></ion-icon>
                <p class="text-logo-footer">Viet Nam <br><span class="fs-5">Explore</span></p>
                <ion-icon name="heart-outline" class="icon-4"></ion-icon>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-footer-left text-center fw-bold">
                    <p>{{ __('??????????????????????????????') }}</p>
                    <P>{{ __('??????????????????') }}</P>
                    <P>{{ __('?????????') }}</P>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-footer-center">
                    <div class="d-flex justify-content-center">
                        <div class="sns-footer d-flex">
                            <ion-icon name="logo-facebook"></ion-icon><br />
                            <ion-icon name="logo-twitter"></ion-icon><br />
                            <ion-icon name="logo-instagram"></ion-icon>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="line mt-4"></div>
                    </div>
                    <div class=" text-center mt-4">
                        <p class="fw-bold">{{ __('???????????????????????????') }}</p>
                    </div>
                    <div class="d-flex justify-content-center text-center fw-bold mt-4">
                        <table>
                            <tr>
                                <td>NAME@EMAIL>COM</td>
                            </tr>
                            <tr>
                                <td>{{ __('????????????') }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center text-center mt-5 mb-5">
                        <ion-icon name="at-circle-outline" class="ion-ft"></ion-icon>
                        <h5 class="ps-3 fw-bold">2022 | Intership Team A</h5>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-footer-right text-center fw-bold">
                    <p>{{ __('?????????') }}</p>
                    <P>{{ __('?????? |?????????') }}</P>
                    <P>{{ __('???????????????') }}</P>
                </div>
            </div>
        </div>

    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {

                // if (this.scrollY > 400) {
                //     $('.scroll-up-btn').addClass("show");

                // } else {
                //     $('.scroll-up-btn').removeClass("show");
                // }
                if (this.scrollY > 0) {
                    $('#menu').addClass("change-menu");

                } else {
                    $('#menu').removeClass("change-menu");
                }

            });
            // $('.scroll-up-btn').click(function() {
            //     $('html').animate({
            //         scrollTop: 0
            //     });
            //     $('html').css("scrollBehavior", "auto");
            // });

        });
    </script>
    @yield('scripts')
</body>

</html>
