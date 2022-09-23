@extends('layouts.app')
@section('content')
    <style>
        .css-button {
            color: #3c3834;
            background-color: #ffffff;
            letter-spacing: 0.1em;
            padding: 10px 20px;
            cursor: pointer;
            border: 1px solid #3c3834;
            -webkit-box-shadow: 0px 0px 0 1px #ffffff, 3px 3px 0 0 #000000;
            box-shadow: 0px 0px 0 1px #ffffff, 3px 3px 0 0 #000000;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        .css-button:hover {
            background-color: #000000;
            color: white;
        }

        sup {
            border: 1px solid #000000;
            padding: 2px;
            font-size: 10px;
        }
    </style>
    <div>
        <header class="d-flex justify-content-center align-items-center">
            <h1>{{ __('個性で勝負の旅。') }}</h1>
        </header>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="title-tour mt-5 mb-5">
                        <p class="fw-b fs-3">{{ __('リストツアー') }}</p>
                    </div>
                    <div class="sapxep mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle border" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __('ドロップダウン') }}
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/listtour?sort=created_at&type=DESC">{{ __('新しさで並べ替え') }}</a></li>
                                        <li><a class="dropdown-item" href="/listtour?sort=featured&type=DESC">{{ __('おすすめ並べ') }}</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/listtour?sort=regular_price&type=ASC">{{ __('価格で並べ替え: 安い順') }}</a></li>
                                        <li><a class="dropdown-item" href="/listtour?sort=regular_price&type=DESC">{{ __('価格で並べ替え: 高い順') }}</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        @foreach ($tours as $tour)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div class="item-tour">
                                    <a href=" {{ url('listtour/' . $tour->slug) }}"><img
                                            src="{{ asset('assets/uploads/tours/' . $tour->image) }}" alt="Image"
                                            width="100%"></a>
                                    <div class="item-content-tour">
                                        <div class="content-title fs-5">
                                            <a href="{{ url('listtour/' . $tour->slug) }}">
                                                <p>{{ $tour->name }}</p>
                                            </a>

                                        </div>
                                        <div class="star fs-6">
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>
                                        <div class="content-text mb-3">
                                            {{ $tour->short_descripsition }}
                                        </div>
                                        <div class="content-bottom d-flex justify-content-between mb-4">
                                            @if ($tour->qty < 0)
                                                <p>Het cho</p>
                                            @endif
                                            @if ($tour->sale_price == 0)
                                                <p class="fs-5 fw-b">{{ number_format($tour->regular_price) }}$</p>
                                            @else
                                                <p class="fs-5 fw-b ">
                                                    <span class="text-decoration-line-through">{{ number_format($tour->regular_price) }}</span>->{{ number_format($tour->sale_price) }}$
                                                    <sup>SALE</sup>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $tours->links() }}
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="timkiem mt-5 mb-5">
                        <nav class="navbar navbar-light bg-light">
                            <form class="container-fluid" action="{{ url('search') }}" method="GET">
                                <div class="input-group">

                                    <input type="text" name="query" class="form-control" placeholder="Search"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">
                                        <button type="submit" style="border: none">
                                            <ion-icon name="search-outline"></ion-icon>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </nav>
                    </div>
                    <div class="best-tour-ex mb-5">
                        <div class="title-best-tour">
                            <p class="fs-4 fw-b">{{ __('すべてのカテゴリ') }}</p>
                        </div>
                        @foreach ($categories as $item)
                            <div class="css-dmh fix-bd-1 mb-3">
                                <a href="{{ url('user-category/' . $item->slug) }}"
                                    class="name-dm d-flex justify-content-between">
                                    <img src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="Image"
                                        width="80" height="80">
                                    <div>
                                        <p>{{ $item->name }}</p>
                                        <p>{{ __('もっと') }}</p>
                                    </div>

                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="best-tour-ex mb-5">
                        <div class="title-best-tour">
                            <p class="fs-4 fw-b">{{ __('注目のツアー') }}</p>
                        </div>
                        @foreach ($featured_tour as $item)
                            <div class="item-best-tour d-flex">
                                <a href="{{ url('listtour/' . $item->slug) }}"><img src="{{ asset('assets/uploads/tours/' . $item->image) }}"
                                        alt="Image" width="80" height="80"" width="80" height="80"
                                        alt=""></a>
                                <div class="item-content">
                                    <div class="content-top">
                                        <p class="fs-5">{{ $item->name }} </p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        @if ($item->sale_price == 0)
                                                <p class="fs-5 fw-b ">{{ number_format($item->regular_price) }}$</p>
                                        @else
                                                <p class="fs-5 fw-b">
                                                    <span class="text-decoration-line-through">{{ number_format($item->regular_price) }}</span>->{{ number_format($item->sale_price) }}$
                                                    <sup>SALE</sup>
                                                </p>
                                        @endif
                                        {{-- <a href="">Book Now</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="best-tour-ex mb-5">
                        <div class="title-best-tour">
                            <p class="fs-4 fw-b">{{ __('トレンドのツアー') }}</p>
                        </div>
                        @foreach ($trending_tour as $item)
                            <div class="item-best-tour d-flex">
                                <a href="{{ url('listtour/' . $item->slug) }}"><img
                                        src="{{ asset('assets/uploads/tours/' . $item->image) }}" alt="Image"
                                        width="80" height="80" alt=""></a>
                                <div class="item-content">
                                    <div class="content-top">
                                        <p class="fs-5">{{ $item->name }} </p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        @if ($item->sale_price == 0)
                                                <p class="fs-5 fw-b ">{{ number_format($item->regular_price) }}$</p>
                                        @else
                                                <p class="fs-5 fw-b">
                                                    <span class="text-decoration-line-through">{{ number_format($item->regular_price) }}</span>->{{ number_format($item->sale_price) }}$
                                                    <sup>SALE</sup>
                                                </p>
                                         @endif
                                        {{-- <a href="{{ url('listtour/' . $tour->slug) }}" class="">More</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
