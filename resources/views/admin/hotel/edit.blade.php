@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Hotel</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-hotel/' . $hotel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select" name="cate_id">
                            <option value="{{ $tour->cate_id }}" selected>{{ $tour->category->name }}</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $hotel->name }}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="slug"
                            value="{{ number_format($hotel->price) }}">
                    </div>
                    @if ($hotel->image)
                        <style>
                            img {
                                width: 150px !important;
                            }
                        </style>
                        <img src="{{ asset('assets/uploads/hotels/' . $hotel->image) }}" height="auto" alt=""
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
