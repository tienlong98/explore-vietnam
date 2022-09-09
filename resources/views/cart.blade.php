@extends('layouts.app')
@section('content')
    <div class="home-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h1 class="title-shop">
                        Cart
                    </h1>
                    <p class="text-shop">
                        Home: <span>Cart</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line mb-5"></div>
    <div class="content-cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card mb-5">
                        <div class="card-body">
                            <table class="table text-center show-pc">
                                <thead>
                                    <tr>

                                        <th>Image</th>
                                        <th>Tour Name</th>
                                        <th>Number of people</th>
                                        <th>Price</th>
                                        <th>Departure date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            <td><a href=""><img
                                                        src="{{ asset('assets/uploads/tours/' . $item->image) }}"
                                                        alt="Image" width="80" height="80"
                                                        class="rounded-circle"></a>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->pp_number }}</td>
                                            <th>{{ number_format($item->price) }}</th>
                                            <td>{{ $item->de_date }}</td>
                                            <td><a href="{{ url('delete-cart/' . $item->id) }}"
                                                    class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <p>Subtotal Price: {{ number_format($item->subtotal) }}</p>
                            <p>Tax Price: {{ number_format($item->tax) }}</p>
                            <p>Total Price: {{ number_format($item->total) }}</p>
                            <input type="hidden" name="total" value="{{ number_format($item->total) }}">
                        </div>
                    </div>
                    <form action="{{ url('booked-tour') }}" method="POST">
                        @csrf
                        <div class="col-lg-12 d-flex justify-content-center mb-5">


                            @foreach ($cartitems as $item)
                                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                <input type="hidden" value="{{ Auth::user()->name }}" name="user_name">
                                <input type="hidden" value="{{ $item->name }}" name="tourname">
                                <input type="hidden" value="{{ $item->image }}" name="image">
                                <input type="hidden" value="{{ $item->de_date }}" name="de_date">
                                <input type="hidden" value="{{ $item->pp_number }}" name="pp_number">
                                <input type="hidden" value="{{ $item->total }}" name="total">
                            @endforeach


                            <input type="submit" value="Submit">

                        </div>
                    </form>
                </div>
                {{-- <div class="col-lg-12 d-flex justify-content-center mb-5">

                    {{-- <input type="submit" value="Submit" > --}}
                {{-- <a href="{{ url('thank', []) }}">Submit</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
