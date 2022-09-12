@extends('layouts.app')
@section('content')
    <div>
        <header class="d-flex justify-content-center align-items-center">
            <h1>Travel by personality.</h1>
        </header>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="title-tour mt-5 mb-5">
                        <h3 class="fw-b">List Tour</h3>
                    </div>
                    <div class="sapxep mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <form action="" method="post"></form>
                                <select class="form-select css-border" aria-label="Default select example">
                                    <option value="default" selected>Default</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="featured">Sort by Featured </option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        @foreach ($tour as $item)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div class="item-tour">
                                    <a href=" {{ url('listtour/' . $item->slug) }}"><img
                                            src="{{ asset('assets/uploads/tours/' . $item->image) }}" alt="Image"
                                            width="100%"></a>
                                    <div class="item-content-tour ps-3">
                                        <div class="content-title fs-5">
                                            <a href="{{ url('listtour/' . $item->slug) }}">
                                                <p>{{ $item->name }}</p>
                                            </a>

                                        </div>
                                        <div class="star fs-6">
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>
                                        <div class="content-text">
                                            {{ $item->short_descripsition }}
                                        </div>
                                        <div class="content-bottom d-flex justify-content-between">
                                            <p class="fs-5 fw-b">{{ number_format($item->regular_price) }}$</p>

                                            @if ($item->qty > 0)
                                                <a href="">Book Now</a>
                                            @else
                                                <p>Het cho</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- {{ $tour->links() }} --}}
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="timkiem mt-5 mb-5">
                        <nav class="navbar navbar-light bg-light">
                            <form class="container-fluid" action="{{ url('search') }}">
                                <div class="input-group">

                                    <input type="text" name="query" class="form-control" placeholder="Search"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">
                                        <button type="submit">
                                            <ion-icon name="search-outline"></ion-icon>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </nav>
                    </div>
                    <div class="best-tour-ex mb-5">
                        <div class="title-best-tour">
                            <p class="fs-4 fw-b">All Categories</p>
                        </div>
                        @foreach ($categories as $item)
                            <div class="css-dmh fix-bd-1 mb-3">
                                <a href="{{ url('user-category/' . $item->slug) }}"
                                    class="name-dm d-flex justify-content-between">
                                    <img src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="Image"
                                        width="80" height="80">
                                    <div>
                                        <p>{{ $item->name }}</p>
                                        <p>More</p>
                                    </div>

                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="best-tour-ex mb-5">
                        <div class="title-best-tour">
                            <p class="fs-4 fw-b">Featured Tour</p>
                        </div>
                        @foreach ($featured_tour as $item)
                            <div class="item-best-tour d-flex">
                                <a href=""><img src="{{ asset('assets/uploads/tours/' . $item->image) }}"
                                        alt="Image" width="80" height="80"" width="80" height="80"
                                        alt=""></a>
                                <div class="item-content">
                                    <div class="content-top">
                                        <p class="fs-5">{{ $item->name }} </p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="fs-5">{{ number_format($item->regular_price) }}$</p>
                                        <a href="">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="best-tour-ex mb-5">
                        <div class="title-best-tour">
                            <p class="fs-4 fw-b">Trending Tour</p>
                        </div>
                        @foreach ($trending_tour as $item)
                            <div class="item-best-tour d-flex">
                                <a href=""><img src="{{ asset('assets/uploads/tours/' . $item->image) }}"
                                        alt="Image" width="80" height="80" alt=""></a>
                                <div class="item-content">
                                    <div class="content-top">
                                        <p class="fs-5">{{ $item->name }} </p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="fs-5">{{ number_format($item->regular_price) }}$</p>
                                        <a>Book Now</a>
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
