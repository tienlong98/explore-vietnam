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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

</head>

<body>
    <header>
        <div class="menu">

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid d-flex justify-content-around">
                    <div class="logo">
                        <ion-icon name="heart-outline" class="icon-1"></ion-icon>
                        <a class="text-logo" href="#">Viet Nam</a>
                        <ion-icon name="heart-outline" class="icon-2"></ion-icon>
                    </div>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/listtour">Tours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hotels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-right d-flex">
                        <div class="search me-4">
                            <a href="#">
                                <ion-icon name="cart-outline"></ion-icon>
                            </a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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
                    <p>PRIVACY POLICY</p>
                    <P>TEAM & CONDITIONS</P>
                    <P>ABOUT</P>
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
                        <p class="fw-bold">WEEKLY NEWSLETTER</p>
                    </div>
                    <div class="d-flex justify-content-center text-center fw-bold mt-4">
                        <table>
                            <tr>
                                <td>NAME@EMAIL>COM</td>
                            </tr>
                            <tr>
                                <td>SUBSCRIBE</td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center text-center mt-5 mb-5">
                        <ion-icon name="at-circle-outline" class="ion-ft"></ion-icon>
                        <h5 class="ps-3 fw-bold">2022 | Intership Team A</h5>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-footer-right text-center fw-bold">
                    <p>PAYMENT INFO</p>
                    <P>RETURN | EXCHANGES</P>
                    <P>CONTACT</P>
                </div>
            </div>
        </div>

    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
