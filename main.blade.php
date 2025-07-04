@extends('parent.sample')


@section('content')
<style>
  .carousel-item img {
    height: 300px;        /* Set slider height */
    object-fit: cover;    /* Crop image to fit area */
  }

  .carousel-caption h2 {
    font-size: 48px;
    font-weight: bold;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
    color: #fff;
    display: inline-block;
    padding: 10px 20px;
    border-radius: 10px;
  }

  .carousel-caption {
    top: 50%;
    bottom: auto;
    transform: translateY(-50%);
  }
</style>
<div id="sliderExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="/images/istockphoto-slider1.jpg" class="d-block w-100" alt="Ready to Wear">
      <div class="carousel-caption d-none d-md-block">
        <h2>Ready to Wear</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/pexels-halemphotography-32564143.jpg" class="d-block w-100" alt="Unstitched">
      <div class="carousel-caption d-none d-md-block">
        <h2>Unstitched</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/istockphoto-slider2.jpg" class="d-block w-100" alt="Pret">
      <div class="carousel-caption d-none d-md-block">
        <h2>Pret</h2>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#sliderExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#sliderExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- 2nd container -->
 <div class="container my-5">
  <h2 class="text-center mb-5" style="font-weight: bold;">PRET</h2>
  <div class="row text-center">

    <!-- Card 1 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-1.webp" alt="Lawn" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">LAWN</h6>
    </div>

    <!-- Card 2 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-2.webp" alt="Daily Wear" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">DAILY WEAR</h6>
    </div>

    <!-- Card 3 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-3.webp" alt="Glam" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">GLAM</h6>
    </div>

    <!-- Card 4 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-4.webp" alt="Signature" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">SIGNATURE</h6>
    </div>

  

  </div>
   <div class="row text-center">

    <!-- Card 1 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-5.webp" alt="Lawn" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">LAWN</h6>
    </div>

    <!-- Card 2 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-6.webp" alt="Daily Wear" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">DAILY WEAR</h6>
    </div>

    <!-- Card 3 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-7.webp" alt="Glam" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">GLAM</h6>
    </div>

    <!-- Card 4 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dress-8.webp" alt="Signature" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">SIGNATURE</h6>
    </div>

  

  </div>

</div>

<!-- 3rd container -->

<div class="container my-5">
  <h2 class="text-center mb-5" style="font-weight: bold;">UNSTITCHED</h2>
  <div class="row text-center">

    <!-- Card 1 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-1.webp" alt="Lawn" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">MODREN PRINT</h6>
    </div>

    <!-- Card 2 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-2.webp" alt="Daily Wear" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">GLAM PRINT</h6>
    </div>

    <!-- Card 3 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-3.webp" alt="Glam" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">SALE</h6>
    </div>

    <!-- Card 4 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-4.webp" alt="Signature" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">DAILY WEAR PRINT</h6>
    </div>

  

  </div>
   <div class="row text-center">

    <!-- Card 1 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-5.webp" alt="Lawn" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">LAWN</h6>
    </div>

    <!-- Card 2 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-6.webp" alt="Daily Wear" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">DAILY WEAR</h6>
    </div>

    <!-- Card 3 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-7.webp" alt="Glam" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">GLAM PRINT</h6>
    </div>

    <!-- Card 4 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressun-8.webp" alt="Signature" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">SIGNATURE</h6>
    </div>

  

  </div>

</div>

<!-- section 4 -->


<div class="container my-5">
  <h2 class="text-center mb-5" style="font-weight: bold;">READY TO WEAR</h2>
  <div class="row text-center">

    <!-- Card 1 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-1.webp" alt="Lawn" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">MODREN PRINT</h6>
    </div>

    <!-- Card 2 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-2.webp" alt="Daily Wear" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">GLAM PRINT</h6>
    </div>

    <!-- Card 3 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-3.webp" alt="Glam" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">SALE</h6>
    </div>

    <!-- Card 4 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-4.webp" alt="Signature" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">DAILY WEAR PRINT</h6>
    </div>

  

  </div>
   <div class="row text-center">

    <!-- Card 1 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-5.webp" alt="Lawn" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">LAWN</h6>
    </div>

    <!-- Card 2 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-6.webp" alt="Daily Wear" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">DAILY WEAR</h6>
    </div>

    <!-- Card 3 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-7.webp" alt="Glam" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">GLAM PRINT</h6>
    </div>

    <!-- Card 4 -->
    <div class="col-6 col-md-3 mb-4">
      <img src="/images/dressrd-8.webp" alt="Signature" class="rounded-circle img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: top;">
      <h6 class="mt-3">SIGNATURE</h6>
    </div>

  

  </div>

</div>




@endsection
