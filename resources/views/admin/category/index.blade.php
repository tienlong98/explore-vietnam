@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>All Category</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td><img src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="Image" width="80"
                                    height="80"></td>
                            <td><a href="{{ url('edit-category/' . $item->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('delete-category/' . $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
