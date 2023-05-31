@extends('layouts.app')

@section('content')
    <div class="card">
        <img class="card-img-top" src="{{ $product->image }}" alt="Title">
        <div class="card-body">
            <h4 class="card-title">{{ $product->name }}</h4>
            <p class="card-text">{{ $product->price }}</p>
        </div>
    </div>
@endsection
