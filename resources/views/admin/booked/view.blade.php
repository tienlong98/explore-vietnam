@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table border">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Tour Name</th>
                        <th>Number of people</th>
                        <th>Departure date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $booked->username }}</td>
                        <td>{{ $booked->tourname }}</td>
                        <td>{{ $booked->pp_number }}</td>
                        <td>{{ $booked->de_date }}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table border">
                <thead>
                    <tr>
                        <th>Tour Image</th>
                        {{-- <th>Hotel</th>
                        <th>Car</th> --}}
                        <th>Status</th>
                        <th>Action</th>
                    </tr>




                </thead>
                <tbody>
                    <tr>
                        <td><img width="100" height="100" src="{{ asset('assets/uploads/tours/' . $booked->image) }}"
                                alt="">
                        </td>

                        {{-- <td><img width="50" height="50"
                                src="{{ asset('assets/uploads/hotels/' . BookedTour::hotel()->image) }}" alt="">
                        </td>
                        <td><img width="50" height="50"
                                src="{{ asset('assets/uploads/cars/' . $booked->car()->image) }}" alt=""></td> --}}
                        <form action="{{ url('update-status/' . $booked->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <td>
                                <select class="form-select" name="status">

                                    <option {{ $booked->status == 0 ? 'selected' : '' }} value="0">Pending</option>

                                    <option {{ $booked->status == 1 ? 'selected' : '' }} value="1">Complate</option>

                                </select>
                            </td>

                            <td><button class="btn btn-success" type="submit">Submit</button></td>
                        </form>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
@endsection
