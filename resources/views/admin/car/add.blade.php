@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Car</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-car') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="col-lg-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
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
