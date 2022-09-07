@extends('layouts.custom-menu')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 best-tour text-center mt-5">
                <h1 class="title-bt">LIVE FULLY IN VIETNAM</h1>
                <div class="text-title fs-5">
                    <p class="text-title">
                        " Spectacular nature. Exceptional cuisine. Cultural diversity.
                        Excellent service. <br /><br />
                        Vietnam has fully reopened for international tourism without any
                        Covid-19 restrictions. Now you are free to discover and enjoy
                        various wild nature destinations like limestone mountains, green
                        terraced rice fields, and white sandy beaches. Holiday is coming,
                        let’s get away from it all.
                        <br /><br />
                        Take in new sites, sounds, and flavors. Experiences that are truly
                        memorable. Let’s explore, relax, and play. Live fully in Vietnam.
                        "
                    </p>
                    <h1>︾</h1>
                </div>
                <p class="text-title"></p>
            </div>
            <div class="col-lg-12 mt-5 mb-5 text-center">
                <h1>Places to go</h1>
                <p>Gioi thieu gi do ve cac dia diem du lich noi tieng</p>
            </div>
            <div class="ks mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 mt-5 mb-3">
                        <div class="item-hotels">
                            <a href="/listyama">
                                <img src="{{ asset('assets/images/ptg3.jpg') }}" />
                                <div class="item-content-ks d-flex justify-content-center align-items-center">
                                    <p>Adventure Trails</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                        <div class="item-hotels">
                            <a href="/listditich">
                                <img src="{{ asset('assets/images/ptg6.png') }}" />
                                <div class="item-content-ks d-flex justify-content-center align-items-center">
                                    <p>Best Heritage Sites</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 mt-5 mb-3">
                        <div class="item-hotels">
                            <a href="/listumi">
                                <img src="{{ asset('assets/images/ptg4.jpg') }}" />
                                <div class="item-content-ks d-flex justify-content-center align-items-center">
                                    <p>Coast and Islands</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mb-5">
                <h1 class="cac-tour-nt mt-5">BEST TOURS</h1>
                <p>Gioi thieu gi do ve cac tours noi tieng</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="item-bt">
                    <img class="" src="{{ asset('assets/images/kp8.jpg') }}" />
                    <div class="item-content-tour">
                        <div class="d-flex justify-content-between">
                            <p class="item-title fs-5 ms-3 mb-2">HA LONG</p>
                            <p class="me-3 fs-5 mb-2">2N1D</p>
                        </div>
                        <p class="item-naiyo fs-6 ms-3">Gioi thieu ve ha long...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="item-bt">
                    <img class="" src="{{ asset('assets/images/kp2.jpg') }}" />
                    <div class="item-content-tour">
                        <div class="d-flex justify-content-between">
                            <p class="item-title fs-5 ms-3 mb-2">HA LONG</p>
                            <p class="me-3 fs-5 mb-2">2N1D</p>
                        </div>
                        <p class="item-naiyo fs-6 ms-3">Gioi thieu ve ha long...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="item-bt">
                    <img class="" src="{{ asset('assets/images/kp11.jpg') }}" />
                    <div class="item-content-tour">
                        <div class="d-flex justify-content-between">
                            <p class="item-title fs-5 ms-3 mb-2">HA LONG</p>
                            <p class="me-3 fs-5 mb-2">2N1D</p>
                        </div>
                        <p class="item-naiyo fs-6 ms-3">Gioi thieu ve ha long...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="item-bt">
                    <img class="" src="{{ asset('assets/images/kp4.jpg') }}" />
                    <div class="item-content-tour">
                        <div class="d-flex justify-content-between">
                            <p class="item-title fs-5 ms-3 mb-2">HA LONG</p>
                            <p class="me-3 fs-5 mb-2">2N1D</p>
                        </div>
                        <p class="item-naiyo fs-6 ms-3">Gioi thieu ve ha long...</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5 mb-5">
                <h1>TRAVEL TIPS</h1>
                <p>Prepare for your trip with these practical articles</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="car-sport-outline"></ion-icon>
                    <p class="fs-4">TRANSPORT</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="thunderstorm-outline"></ion-icon>
                    <p class="fs-4">WEATHER</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="shield-outline"></ion-icon>
                    <p class="fs-4">SAFETY</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="book-outline"></ion-icon>
                    <p class="fs-4">HISTORY</p>
                </div>
            </div>

            <div class="sokaibasho">
                <div class="title-sokai text-center mt-5 mb-5">
                    <h1>SHARE YOUR STORY</h1>
                    <p>
                        Tag your best #ExploreVietnam moments on Instagram
                    </p>
                </div>
                <div class="sokai-content">
                    <div class="image">
                        <a href="https://www.instagram.com/">
                            <img class="myimg" src="{{ asset('assets/images/kp1.jpg') }}" />
                            <ion-icon class="fs-2" name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp3.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>
                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp4.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp5.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp6.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp7.png') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp16.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp9.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp10.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp11.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp12.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp13.jpg') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/images/kp14.png') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
