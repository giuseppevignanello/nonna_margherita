@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    <a class="btn btn-primary" href="{{ route('admin.products.create') }}" role="button">Add new Product</a>
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
                <caption>Products</caption>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>In Stock</th>
                    <th>Weight</th>
                    <th>Product Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @forelse ($products as $product)
                    <tr class="table-primary">
                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td> <img style="width: 100px" src="{{ $product->image }}" alt=""> </td>
                        <td>{{ $product->in_stock }}</td>
                        <td>{{ $product->weight }}</td>
                        <td>{{ $product->product_code }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.products.show', $product->id) }}"
                                role="button"><i class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-primary" href="{{ route('admin.products.edit', $product->id) }}"
                                role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-trash"></i></a>
                        </td>

                    </tr>
                @empty

                    <tr class="table-primary">
                        <td scope="row">There aren't products in stock</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
