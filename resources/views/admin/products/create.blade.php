@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.products.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" class="form-control" name="image" id="image">
            </div>
            <div class="form-check">
                <label for="in_stock" class="form-check-label">In Stock</label>
                <input type="checkbox" class="form-check-input" name="in_stock" id="in_stock" value="1" checked>
            </div>
            <div class="mb-3">
                <label for="product_code" class="form-label">product_code</label>
                <input type="text" class="form-control" name="product_code" id="product_code">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
