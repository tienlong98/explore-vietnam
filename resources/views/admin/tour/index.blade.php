<style>
    .fix-de {
        width: 150px;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 5;
        word-wrap: break-word;
        /* -webkit-box-orient: vertical; */
    }
</style>
@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>All Tour</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->name }}</td>

                            <td><img src="{{ asset('assets/uploads/tours/' . $item->image) }}" alt="Image" width="80"
                                    height="80"></td>
                            <td>{{ number_format($item->regular_price) }}</td>

                            <td><a href="{{ url('edit-tour/' . $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('delete-tour/' . $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
