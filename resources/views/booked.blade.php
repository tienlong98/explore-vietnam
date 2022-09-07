@extends('layouts.app')
@section('content')
    <div class="home-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h1 class="title-shop">
                        Booked Tour
                    </h1>

                </div>
            </div>
        </div>
    </div>
    <div class="line mb-5"></div>
    <div class="content-cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ url('payment') }}" method="POST">
                        @csrf
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table text-center show-pc">
                                    <thead>
                                        <tr>
                                            <th>Tour Name</th>
                                            <th>Image</th>
                                            <th>Number of people</th>
                                            <th>Total Price</th>
                                            <th>Departure date</th>
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
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
