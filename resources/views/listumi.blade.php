@extends('layouts.app')
@section('content')
    <div class="banner d-flex justify-content-center">
        <img src="{{ asset('assets/images/ptg13.jpg') }}" alt="">
        <h1 class="">Coast and Islands</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title-list">
                <h3 class="mt-5">List Coast and Islands</h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <a href="/phuquoc"><img src="{{ asset('assets/images/ptg13.jpg') }}" class="rounded" width="100%"
                            alt=""></a>
                </div>
                <p>Phu Quoc</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/images/ptg13.jpg') }}" class="rounded" width="100%" alt="">

                </div>
                <p>Ha Giang</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/images/ptg13.jpg') }}" class="rounded" width="100%" alt="">

                </div>
                <p>Moc Chau</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5 mb-5">
                <div class="item">
                    <img src="{{ asset('assets/images/ptg13.jpg') }}" class="rounded" width="100%" alt="">

                </div>
                <p>Ninh Binh</p>
            </div>
        </div>
    </div>
@endsection