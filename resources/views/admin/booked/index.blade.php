@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Booked Tour</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Tour Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booked as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->tourname }}</td>
                            <td>{{ $item->total }}</td>
                            <td>{{ $item->status == 0 ? 'Pending' : 'Complate' }}
                                {{-- <select class="form-select" name="status">

                                    <option {{ $item->status == 0 ? 'selected' : '' }} value="0">Pending</option>

                                    <option {{ $item->status == 1 ? 'selected' : '' }} value="1">Complate</option>

                                </select> --}}
                            </td>
                            <td><a href="{{ url('admin-booked/' . $item->id) }}" class="btn btn-success" type="submit">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
