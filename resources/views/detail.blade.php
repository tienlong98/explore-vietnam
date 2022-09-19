@extends('layouts.app')

@section('content')
    <style>
        label {
            margin-bottom: 10px;
        }

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

        figure img {
            width: 50%;
        }
    </style>
    <div class="title-detail text-center">
        <h1>{{ $tour->name }}</h1>
    </div>
    <div class="container mt-5 mb-5 tour_data">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-items-cente">
                        <img src="{{ asset('assets/uploads/tours') }}/{{ $tour->image }}" width="90%" alt="">

                    </div>
                    <div class="col-lg-6">
                        <div class="rating">
                            <div>
                                <div id="rateYo1"></div>
                            </div>
                            <p>(2 review)</p>
                        </div>
                        <div class="short-dec">
                            <p class="fw-b fs-4">{{ $tour->name }}</p>
                            <p>{{ $tour->short_descripsition }}</p>
                        </div>
                        <div class="dattour">
                            <form method="POST" action="{{ url('addcart/' . $tour->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="date" class=" col-form-label">Select departure date:</label>
                                    <div>
                                        <div class="input-group date">
                                            <input type="date" class="form-control " value="" name="dd_date"
                                                required>
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
                                                    <input class='ctrl__counter-input ' maxlength='10' type='text'
                                                        value='1' name="pp_number">
                                                    <div class='ctrl__counter-num'>1</div>
                                                </div>
                                                <div class='ctrl__button ctrl__button--increment'>+</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="hotel">
                                            <label for="">Hotel:</label>
                                            <select class="form-select" name="hotel_id">
                                                <option value="" selected>Default Hotel</option>
                                                @foreach ($hotels as $item)
                                                    <option value="{{ $item->price }}">
                                                        <div class="item-hotel"
                                                            style="background-image: url("{{ asset('assets/uploads/hotels/' . $item->image) }}")">
                                                            {{-- <img width="50"
                                                                src="{{ asset('assets/uploads/hotels/' . $item->image) }}"
                                                                alt=""> --}}
                                                            <div class="hotel-content">
                                                                <p>{{ $item->name }}</p>
                                                                <p>({{ number_format($item->price) }}$)</p>
                                                            </div>
                                                        </div>
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="car">
                                            <label for="">Car:</label>
                                            <select class="form-select" name="car_id">
                                                <option value="" selected>No Car</option>
                                                @foreach ($cars as $item)
                                                    <option value="{{ $item->price }}">
                                                        <div class="hotel-content">
                                                            <p>{{ $item->name }}</p>
                                                            <p>{{ number_format($item->price) }}</p>
                                                        </div>

                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-between mt-3">
                                        <label class="col-form-label">Tour Price:</label>
                                        <div>

                                            <p class="fs-3 fw-b">{{ number_format($tour->regular_price) }}$ <span
                                                    class="fs-5">(one people)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nut">
                                    <div class="frame">
                                        {{-- <a href="" class="addToCartBtn">Book Now</a> --}}
                                        <input class="css-button" type="submit" value="Book Tour">
                                        {{-- <button type="submit" class="btn btn-primary">Book Tour</button> --}}
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="content-review mt-5 mb-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Desciption</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Review</button>
                        </li>


                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">{!! $tour->descripsition !!}</div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">

                            <div class="creat-review mt-5 mb-5">

                                <div class="review d-flex">
                                    <div class="anhdaidien d-flex justify-content-center">
                                        <img class="rounded-circle" src="{{ asset('assets/images/avatar.jpg') }}"
                                            width="50" height="50" alt="">
                                    </div>
                                    <div class="content-conmemt">
                                        <form action="{{ url('rating', []) }}" method="POST">
                                            @csrf
                                            <div class="rating mb-3">
                                                <div id="rateYo"></div>
                                                <input type="hidden" id="rating-star" name="rating_star">
                                                <input type="hidden" id="tour_id" name="tour_id"
                                                    value="{{ $tour->id }}">
                                                <input type="hidden" id="user_id" name="user_id"
                                                    value="{{ Auth::user()->id }}">
                                            </div>
                                            <textarea name="comment" id="comment" rows="4"></textarea>
                                            <div class="d-flex justify-content-center mt-3 mb-5"><input type="submit"
                                                    value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @foreach ($rate as $item)
                                <div class="comtent-item mt-5 mb-5 d-flex">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="rounded-circle" src="{{ asset('assets/images/avatar.jpg') }}"
                                            width="50" height="50" alt="">
                                    </div>

                                    <div class="comment-naiyo">
                                        <div class="yoho-user d-flex justify-content-between">
                                            <p>{{ Auth::user()->name }}</p>
                                            <div class="time-rate d-flex">
                                                <p>{{ Carbon\Carbon::parse($item->created_at)->format('d F Y g:i A') }}</p>
                                                {{-- <div class="star">
                                                    <div id="rateYo1"></div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <p>{{ $item->comment }}</p>
                                    </div>


                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="timkiem mt-5 mb-5">
                    <nav class="navbar navbar-light bg-light">
                        <form class="container-fluid">
                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-text" id="basic-addon1">
                                    <a href="#">
                                        <ion-icon name="search-outline"></ion-icon>
                                    </a>
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
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <style>
        .review .anhdaidien {
            width: 15%;
        }

        .review .content-conmemt {
            width: 85%;

        }

        textarea {
            width: 100%;
        }

        .comment-naiyo {
            width: 100%;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        $(function() {

            $("#rateYo").rateYo({
                starWidth: "20px",
                rating: 0,
                normalFill: "#A0A0A0",
                ratedFill: "#E74C3C",
            }).on("rateyo.set", function(e, data) {
                $("#rating-star").val(data.rating);
                // alert("The rating is set to " + data.rating + "!");
            });
            let rating = '{{ $rateAvg }}';
            $("#rateYo1").rateYo({
                starWidth: "20px",
                rating: rating,
                normalFill: "#A0A0A0",
                ratedFill: "#E74C3C",
            });

        });
    </script>
@endsection
