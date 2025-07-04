@extends('parent.sample')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Accessories</h2>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/accessories/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">Rs.{{ $product['price'] }}</p>
                    <button 
                        class="btn btn-outline-primary w-100"
                        onclick='addToCart({{ $product["id"] }}, {!! json_encode($product["name"]) !!}, {{ $product["price"] }}, {!! json_encode($product["image"]) !!}, "accessories")'>
                        <i class="fa fa-shopping-cart"></i>  Add to Cart
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
