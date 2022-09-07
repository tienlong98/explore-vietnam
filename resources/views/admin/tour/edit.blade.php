@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Tour</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-tour/' . $tour->id) }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="name" value="{{ $tour->name }}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $tour->slug }}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Short Description</label>
                        <input type="text" class="form-control" value="{{ $tour->short_descripsition }}"
                            name="short_descripsition">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" rows="3" name="descripsition">{{ $tour->descripsition }}</textarea>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for=""> Regular Price</label>
                        <input type="text" class="form-control" value="{{ $tour->regular_price }}" name="regular_price">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for=""> Sale Price</label>
                        <input type="text" class="form-control" value="{{ $tour->sale_price }}" name="sale_price">
                    </div>

                    <div class="col-lg-6 mb-3 form-check form-switch ps-5">
                        <input class="form-check-input" {{ $tour->featured == 1 ? 'checked' : '' }} type="checkbox"
                            role="switch" name="featured">
                        <label class="form-check-label" for="">Featured</label>
                    </div>
                    <div class="col-lg-6 mb-3 form-check form-switch ps-5">
                        <input class="form-check-input" {{ $tour->trending == 1 ? 'checked' : '' }} type="checkbox"
                            role="switch" name="trending">
                        <label class="form-check-label" for="">Trending</label>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for=""> Quantity</label>
                        <input type="text" class="form-control" value="{{ $tour->image }}" name="qty">
                    </div>
                    @if ($tour->image)
                        <img src="{{ asset('assets/uploads/tours/' . $tour->image) }}" class="edit-img" alt="">
                    @endif
                    <div class="col-lg-12 mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" value="{{ $tour->image }}" type="file" id="formFile"
                            name="image">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
