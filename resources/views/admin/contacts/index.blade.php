@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Contacts</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Furigana</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->firigana }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->sdt }}</td>
                            <td>{{ $item->content }}</td>
                            <td><a href="{{ url('admin-contact/' . $item->id) }}"><i class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ url('delete-contact/' . $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
