@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Tour</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-tour') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select" name="cate_id">
                            <option value="" selected>Select Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Short Description</label>
                        <input type="text" class="form-control" name="short_descripsition">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" rows="3" name="descripsition"></textarea>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for=""> Regular Price</label>
                        <input type="text" class="form-control" name="regular_price">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for=""> Sale Price</label>
                        <input type="text" class="form-control" name="sale_price">
                    </div>

                    <div class="col-lg-6 mb-3 form-check form-switch ps-5">
                        <input class="form-check-input" type="checkbox" role="switch" name="featured">
                        <label class="form-check-label" for="">Featured</label>
                    </div>
                    <div class="col-lg-6 mb-3 form-check form-switch ps-5">
                        <input class="form-check-input" type="checkbox" role="switch" name="trending">
                        <label class="form-check-label" for="">Trending</label>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for=""> Quantity</label>
                        <input type="text" class="form-control" name="qty">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
