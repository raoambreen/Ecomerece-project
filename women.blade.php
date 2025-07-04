@extends('parent.sample')


@section('content')
<div class="mb-4">
    <div class="w-100" style="height: 300px; overflow: hidden; border-radius: 10px;">
        <img src="/images/women/Modern_prints.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Main Banner">
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center">New Arrivals</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><strong>Rs. {{ number_format($product->price) }}</strong></p>
                        <button class="btn btn-outline-primary" onclick="addToCart('{{ $product->id }}')">
                            <i class="fa fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
let cart = [];

function addToCart(productId) {
    fetch(`/api/products/${productId}`)
        .then(res => {
            if (!res.ok) throw new Error('Product not found');
            return res.json();
        })
        .then(product => {
            let existing = cart.find(item => item.id === product.id);
            if (existing) {
                existing.quantity++;
            } else {
                cart.push({ ...product, quantity: 1 });
            }
            updateCartView();
        })
        .catch(error => {
            console.error('Add to Cart Error:', error);
            alert('Failed to add to cart!');
        });
}
</script>







@endsection