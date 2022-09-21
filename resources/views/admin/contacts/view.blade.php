@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table border">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Furigana</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->firigana }}</td>
                        <td>{{ $contact->sdt }}</td>
                        <td>{{ $contact->email }}</td>
                    </tr>
                </tbody>
            </table>


        </div>
        <div class="card-footer">
            <p class="fs-4">Message:</p>
            <p>{{ $contact->content }}</p>
        </div>
    </div>
@endsection
