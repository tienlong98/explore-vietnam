@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Car</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-car/' . $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $car->name }}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="slug" value="{{ number_format($car->price) }}">
                    </div>
                    @if ($car->image)
                        <style>
                            img {
                                width: 150px !important;
                            }
                        </style>
                        <img src="{{ asset('assets/uploads/hotels/' . $car->image) }}" height="auto" alt=""
                            class="mb-3">
                    @endif
                    <div class="col-lg-12 mb-3">
                        <input type="file" name="image">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
