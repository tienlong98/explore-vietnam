@extends('layouts.app')

@section('content')
    <div class="banner">
        <img src="{{ asset('assets/uploads/tours') }}/{{ $tour->image }}" width="100%" height="100%" alt="">
    </div>
    <div class="container mt-5 mb-5 tour_data">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="detail-content text-center">
                    <div>{{ $tour->descripsition }}</div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="dattour">
                    <h4>{{ $tour->name }}</h4>
                    <form method="POST" action="{{ url('addcart/' . $tour->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="date" class=" col-form-label">Select departure date:</label>
                            <div>
                                <div class="input-group date">
                                    <input type="date" class="form-control " value="" name="dd_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="sln mt-4">
                            <div class="form-group d-flex justify-content-between">
                                <label class="col-form-label">Number of people:</label>
                                <div>
                                    <div class='ctrl'>
                                        <div class='ctrl__button ctrl__button--decrement'>-</div>
                                        <div class='ctrl__counter'>
                                            <input class='ctrl__counter-input ' maxlength='10' type='text' value='1'
                                                name="pp_number">
                                            <div class='ctrl__counter-num'>1</div>
                                        </div>
                                        <div class='ctrl__button ctrl__button--increment'>+</div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group d-flex mt-3">
                                <label class="col-form-label">Transport:</label>
                                <div class="d-flex fs-4 w-100 pt">
                                    <ion-icon name="bus-outline"></ion-icon>
                                    <ion-icon name="car-sport-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-between mt-3">
                                <label class="col-form-label">Total:</label>
                                <div>
                                    {{-- @php
                                        $total = $tour->regular_price * $tour->pp_number;
                                    @endphp --}}
                                    <p class="fs-3 fw-b">{{ number_format($tour->regular_price) }}$ X 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="nut">
                            <div class="frame">
                                {{-- <a href="" class="addToCartBtn">Book Now</a> --}}
                                <input type="submit" value="Book Tour">
                                {{-- <button type="submit" class="btn btn-primary">Book Tour</button> --}}
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            {{-- <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-5 mt-5">
                        <h4>Popular Tours</h4>
                    </div>
                    @foreach ($popular_tour as $p_tour)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                            <div class="item-tour">
                                <a href="{{ route('tour.details', ['slug' => $p_tour->slug]) }}"><img
                                        src="{{ asset('images') }}/{{ $p_tour->image }}" width="100%" alt=""></a>
                                <div class="item-content-tour ps-3">
                                    <div class="content-title fs-5">
                                        <a href="tour.details', ['slug' => $tour->slug]) }}">
                                            <p>{{ $p_tour->name }}</p>
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
                                        {{ $p_tour->short_descripsition }}
                                    </div>
                                    <div class="content-bottom d-flex justify-content-between">
                                        <p class="fs-5 fw-b">{{ number_format($p_tour->regular_price) }}$</p>
                                        <a
                                            href=""wire:click.prevent="store('{{ $p_tour->id }}','{{ $p_tour->name }}','{{ $p_tour->regular_price }}')">Book
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-5 mt-5">
                        <h4>Related Tours</h4>
                    </div>
                    @foreach ($related_tour as $r_tour)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                            <div class="item-tour">
                                <a href="{{ route('tour.details', ['slug' => $r_tour->slug]) }}"><img
                                        src="{{ asset('images') }}/{{ $r_tour->image }}" width="100%"
                                        alt=""></a>
                                <div class="item-content-tour ps-3">
                                    <div class="content-title fs-5">
                                        <a href="tour.details', ['slug' => $tour->slug]) }}">
                                            <p>{{ $r_tour->name }}</p>
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
                                        {{ $r_tour->short_descripsition }}
                                    </div>
                                    <div class="content-bottom d-flex justify-content-between">
                                        <p class="fs-5 fw-b">{{ number_format($r_tour->regular_price) }}$</p>
                                        <a href="">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>
@endsection
