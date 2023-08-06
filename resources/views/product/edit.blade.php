@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Product') }}</div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form method="POST" action='{{ route("products.update", $product->id) }}' enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Product Name</label>
                            <input class="form-control" type="text" name="title" placeholder="Product Name" value="{{ $product->title }}">
                            @error('title')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control w-100" name="desc" placeholder="Product Description" rows="3">{{ $product->desc }}</textarea>
                            @error('desc')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Product Quantity</label>
                            <input class="form-control" type="number" name="quantity" placeholder="Product Quantity" value="{{ $product->quantity }}">
                            @error('quantity')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Product Price</label>
                            <input class="form-control" type="number" name="price" placeholder="Product Price" value="{{ $product->price }}">
                            @error('price')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <a class="btn btn-danger mr-1" href='{{ route("products.index") }}' type="submit">Cancel</a>
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection