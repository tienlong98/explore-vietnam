@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>All Cars</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ number_format($item->price) }}</td>
                            <td><img src="{{ asset('assets/uploads/cars/' . $item->image) }}" alt="Image" width="80"
                                    height="80"></td>
                            <td><a href="{{ url('edit-car/' . $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('delete-car/' . $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
