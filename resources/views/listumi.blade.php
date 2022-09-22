@extends('layouts.app')
@section('content')
    <div class="banner d-flex justify-content-center">
        <img src="{{ asset('assets/images/umi1.jpg') }}" alt="">
        <h1 class="">{{ __('海岸と島々') }}</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title-list">
                <h3 class="mt-5">{{ __('海岸と島々ツアーリスト') }}</h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <a href="/camau"><img src="{{ asset('assets/new-images/cho-noi-ca-mau.png') }}" class="rounded" width="100%"
                            alt=""></a>
                </div>
                <p>{{ __('カマウ水上マーケット') }}</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/new-images/NhaTrang.jpg') }}" class="rounded" width="100%" alt="">

                </div>
                <p>{{ __('ニャチャン') }}</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/new-images/Phu-Quoc.jpg') }}" class="rounded" width="100%" alt="">

                </div>
                <p>{{ __('フーコック島') }}</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/new-images/HaLong.jpg') }}" class="rounded" width="100%" alt="">

                </div>
                <p>{{ __('ハロン湾') }}</p>
            </div>
        </div>
    </div>
@endsection
