@extends('layouts.app')
@section('content')
<div class="banner d-flex justify-content-center">
    <img src="{{asset('assets/new-images/hanoi2.png')}}" alt="">
    <h1 class="">{{ __('人気遺産') }}</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 title-list">
            <h3 class="mt-5">{{ __('人気遺産ツアーリスト') }}</h3>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
            <div class="item">
                <a href="/rungduabaymau"><img src="{{asset('assets/new-images/rungdua5.jpg')}}" class="rounded" width="100%" alt=""></a>
            </div>
            <p>{{ __('ラング ドゥア ベイ マウ') }}</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
            <div class="item">
                <img src="{{asset('assets/new-images/CoDoHue.jpg')}}" class="rounded" width="100%" alt="">

            </div>
            <p>{{ __('フエの古都') }}</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
            <div class="item">
                <img src="{{asset('assets/new-images/ThanhDiaMySon.jpg')}}" class="rounded" width="100%" alt="">

            </div>
            <p>{{ __('ミーソン聖域') }}</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
            <div class="item">
                <img src="{{asset('assets/new-images/HoiAn.jpg')}}" class="rounded" width="100%" alt="">

            </div>
            <p>{{ __('ホイアン旧市街') }}</p>
        </div>
    </div>
</div>
@endsection
