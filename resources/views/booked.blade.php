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
                                            <th>ID</th>
                                            <th>{{ __('イメージ') }}</th>
                                            <th>{{ __('ツアー') }}</th>
                                            <th>{{ __('人数') }}</th>
                                            <th>{{ __('価格') }}</th>
                                            <th>{{ __('出発日') }}</th>
                                            <th>{{ __('状態') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookeditem as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td><a href=""><img
                                                            src="{{ asset('assets/uploads/tours/' . $item->image) }}"
                                                            alt="Image" width="80" height="80"
                                                            class="rounded-circle"></a>
                                                </td>
                                                <td>{{ $item->tourname }}</td>
                                                <td>{{ $item->pp_number }}</td>
                                                <td>{{ number_format($item->total) }}</td>
                                                <td>{{ $item->de_date }}</td>
                                                <td>{{ $item->status == 0 ? '未払い' : '払い済み' }}</td>

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
