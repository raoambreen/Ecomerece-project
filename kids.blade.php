@extends('parent.sample')

@section('content')

<!-- Top 2 images container -->
<div class="row mb-4">
    <div class="col-md-6">
        <img src="/images/kids/kid-1.webp" class="img-fluid rounded" alt="Top Image 1">
    </div>
    <div class="col-md-6">
        <img src="/images/kids/kid-b.webp" class="img-fluid rounded" alt="Top Image 2">
    </div>
</div>
<!-- 2nd container  -->

<div class="row">
@foreach($products as $product)
<div class="col-md-4 mb-4">
    <div class="card">
        <img src="{{ asset('images/kids/' . $product['image']) }}" class="img-fluid" style="max-height: 250px; object-fit: contain;" alt="{{ $product['name'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">Rs.{{ $product['price'] }}</p>
           <button 
             class="btn btn-outline-primary"
             onclick='addToCart({{ $product["id"] }}, {!! json_encode($product["name"]) !!}, {{ $product["price"] }}, {!! json_encode($product["image"]) !!}, "kids")'>
             <i class="fa fa-shopping-cart"></i> Add to Cart
           </button>
        </div>
    </div>
</div>
@endforeach
</div>


@endsection