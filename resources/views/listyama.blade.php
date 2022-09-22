@extends('layouts.app')
@section('content')
    <div class="banner d-flex justify-content-center">
        <img src="{{ asset('assets/new-images/NinhBinh2.jpg') }}" alt="">
        <h1 class="">{{ __('冒険旅行') }}</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title-list">
                <h3 class="mt-5">{{ __('冒険旅行ツアーリスト') }}</h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <a href="/sapa"><img src="{{ asset('assets/new-images/sapa1.jpg') }}" class="rounded" width="100%"
                            alt=""></a>
                </div>
                <p>{{ __('サパ') }}</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <a href="/phanxipang">
                        <img src="{{ asset('assets/new-images/phangxipang3.jpg') }}" class="rounded" width="100%" alt="">
                    </a>

                </div>
                <p>{{ __('ファンシーパン') }}</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/new-images/Mocchau.png') }}" class="rounded" width="100%" alt="">

                </div>
                <p>{{ __('モクチャウ') }}</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/new-images/NinhBinh.png') }}" class="rounded" width="100%" alt="">

                </div>
                <p>{{ __('ニンビン') }}</p>
            </div>
        </div>
    </div>
@endsection