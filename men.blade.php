@extends('parent.sample')


@section('content')
<div class="mb-4">
    <div class="w-100" style="height: 300px; overflow: hidden; border-radius: 10px;">
        <img src="/images/men/mend-12.webp" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Main Banner">
    </div>
</div>


<div class="row">
@foreach($products as $product)
<div class="col-md-4 mb-4">
    <div class="card">
        <img src="{{ asset('images/men/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">Rs.{{ $product['price'] }}</p>
           <button 
             class="btn btn-outline-primary"
             onclick='addToCart({{ $product["id"] }}, {!! json_encode($product["name"]) !!}, {{ $product["price"] }}, {!! json_encode($product["image"]) !!}, "men")'>
             <i class="fa fa-shopping-cart"></i>  Add to Cart
           </button>



        </div>
    </div>
</div>
@endforeach
</div>



@endsection