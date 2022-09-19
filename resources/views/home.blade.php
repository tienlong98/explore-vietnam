@extends('layouts.custom-menu')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 best-tour text-center mt-5">
                <h1 class="title-bt">{{ __('完全にベトナムで暮らす') }}</h1>
                <div class="text-title fs-5">
                    <p class="text-title">
                        {{ __('壮観な自然。素晴らしい料理。文化の多様性。すばらしいサービス。') }}<br /><br />
                        {{ __('ベトナムは、Covid-19の制限なしで国際観光を完全に再開しました。 今では、石灰岩の山々、緑の棚田、白い砂浜など、さまざまな野生の自然の目的地を自由に発見して楽しむことができます. 休暇が近づいています。さあ行こう') }}
                        <br /><br />
                        {{ __('新しいサイト、サウンド、フレーバーを取り入れてください。 本当に思い出に残る体験。 探検し、リラックスし、遊びましょう。 ベトナムに完全に休もう。') }}
                    </p>
                    <h1>︾</h1>
                </div>
                <p class="text-title"></p>
            </div>
            <div class="col-lg-12 mt-5 mb-5 text-center">
                <h1>{{ __('行き場') }}</h1>
                <p>{{ __('おすすめ') }}</p>
            </div>
            <div class="ks mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 mt-5 mb-3">
                        <div class="item-hotels">
                            <a href="/listyama">
                                <img src="{{ asset('assets/images/ptg3.jpg') }}" />
                                <div class="item-content-ks d-flex justify-content-center align-items-center">
                                    <p>{{ __('冒険旅行') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                        <div class="item-hotels">
                            <a href="/listditich">
                                <img src="{{ asset('assets/images/ptg6.png') }}" />
                                <div class="item-content-ks d-flex justify-content-center align-items-center">
                                    <p>{{ __('人気遺産') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 mt-5 mb-3">
                        <div class="item-hotels">
                            <a href="/listumi">
                                <img src="{{ asset('assets/images/ptg4.jpg') }}" />
                                <div class="item-content-ks d-flex justify-content-center align-items-center">
                                    <p>{{ __('海岸と島々') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mb-5">
                <h1 class="cac-tour-nt mt-5">{{ __('トレンドのツアー') }}</h1>
                <p>{{ __('おすすめ') }}</p>
            </div>

            @foreach ($trending_tour as $item)
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                    <div class="item-bt">
                        <img class="" src="{{ asset('assets/uploads/tours/' . $item->image) }}" />
                        <div class="item-content-tour">
                            <div class="d-flex justify-content-between">
                                <p class="item-title fs-5 ms-3 mb-2">{{ $item->name }}</p>

                            </div>
                            <p class="item-naiyo fs-6 ms-3">{{ $item->short_descripsition }}</p>
                        </div>
                    </div>
                </div>
            @endforeach



            <div class="col-lg-12 text-center mt-5 mb-5">
                <h1>{{ __('旅行のヒント') }}</h1>
                <p>{{ __('これらの実用的な記事で旅行の準備をしましょう') }}</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="car-sport-outline"></ion-icon>
                    <p class="fs-4">{{ __('交通') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="thunderstorm-outline"></ion-icon>
                    <p class="fs-4">{{ __('天気') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="shield-outline"></ion-icon>
                    <p class="fs-4">{{ __('安全') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-5 pt-3">
                <div class="item-tips fs-1 text-center pt-3">
                    <ion-icon name="book-outline"></ion-icon>
                    <p class="fs-4">{{ __('歴史') }}</p>
                </div>
            </div>

            <div class="sokaibasho">
                <div class="title-sokai text-center mt-5 mb-5">
                    <h1>{{ __('ストーリーを共有しよう') }}</h1>
                    <p>
                    {{ __('インスタグラム で最高の #探検ーベトナム の瞬間をタグ付けしてください') }}
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
                        <img class="myimg" src="{{ asset('assets/new-images/chuch.png') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/new-images/mcc3.png') }}" />
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
                    <div class="image">
                        <img class="myimg" src="{{ asset('assets/new-images/IMG_0700.png') }}" />
                        <ion-icon class="fs-2" name="logo-instagram"></ion-icon>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
