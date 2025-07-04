<!doctype html>
<html lang="en">
  <head>
    <title>Sample</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  
    <style>
  .navbar-brand img {
    max-height: 45px;
  }

  .nav-link {
    font-size: 14px;
    padding: 8px 15px;
    letter-spacing: 0.5px;
  }
  .whatsapp-button {
    position: fixed;
    bottom: 25px;
    right: 25px;
    z-index: 999;
    width: 60px;
    height: 60px;
    background-color: #25D366;
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s;
}

.whatsapp-button:hover {
    transform: scale(1.1);
}

.whatsapp-button img {
    width: 35px;
    height: 35px;
}
  
</style>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-dark py-2 text-white">
  <div class="container d-flex justify-content-between align-items-center ">
    <!-- Left Icons -->
    <div class="d-flex align-items-center mr-auto ">
      <!-- <a href="#" class="text-white mr-5"><i class="bi bi-whatsapp" style="font-size: 28px;"></i></a> -->
       <a href="https://wa.me/+971508544351?text=Hi%20PrimeNest%20Team%2C%20I%20need%20help."class="text-white mr-5"
       class="whatsapp-button" 
       target="_blank" 
       title="Chat with us on WhatsApp">
      <!-- White WhatsApp icon -->
       <i class="fab fa-whatsapp" style="color: white; font-size: 30px;"></i>
      </a>
      <button class="btn btn-link" data-toggle="modal" data-target="#contactModal">
        <i class="fa fa-phone"  style="font-size: 28px; color: white;"></i> <!-- Font Awesome phone icon -->
      </button>
      <form class="d-inline-block">
        <input class="form-control form-control-sm" type="search" placeholder="Search">
      </form>
    </div>

    <!-- Logo -->
    <a class="navbar-brand mx-auto text-white" href="#">
      <img src="/images/logo red.webp" style="height: 70px; width:90px;" alt="Logo">
    </a>

    <!-- Right Icons -->
    <div class="d-flex align-items-center ml-auto">
      <a href="{{url('\signup')}}" class="text-white mr-5" data-toggle="modal" data-target="#signupModal">
       <i class="bi bi-person" style="font-size: 28px;"></i></a>

   
      <a href="#" class="text-white mr-5"><i class="bi bi-truck" style="font-size: 28px;"></i></a>
      <a href="#" class="text-white mr-5"><i class="bi bi-currency-exchange" style="font-size: 28px;"></i></a>
      <!-- Cart Icon -->
      <a href="#" class="position-relative text-white" data-toggle="modal" data-target="#cartModal">
        <i class="bi bi-cart" style="font-size: 28px;"></i>
        <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
         {{ session('cart_count', 0) }}
        </span>
       </a>
    </div>
  </div>
</nav>
<div class="bg-white border-top shadow-sm">
  <div class="container">
    <ul class="nav justify-content-center py-2 font-weight-bold">
      <li class="nav-item"><a class="nav-link text-dark" href="{{url('/women')}}">WOMEN</a></li>
      <li class="nav-item"><a class="nav-link text-dark" href="{{url('/kids')}}">GIRLS & BOYS</a></li>
      <li class="nav-item"><a class="nav-link text-dark" href="{{url('/men')}}">MEN</a></li>
      <li class="nav-item"><a class="nav-link text-dark" href="{{url('/acc')}}">ACCESSORIES</a></li>
      <li class="nav-item"><a class="nav-link text-danger" href="{{url('/sale')}}">SALE</a></li>
    </ul>
  </div>
</div>


<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        @include('parent.signup')  <!-- Yeh file sirf form hold karti hai -->
      </div>

    </div>
  </div>
</div>



<!-- Cart Modal -->
<!-- Bootstrap Cart Modal -->
<!-- Updated Cart Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title">Shopping Cart</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <div class="modal-body" id="cart-items-container">
        <!-- JS will populate cart here -->
      </div>
      
      <div class="modal-footer">
        <h5 class="mr-auto">Grand Total: Rs. <span id="grand-total">0</span></h5>
        <button type="button" class="btn btn-primary">Checkout</button>
      </div>
      
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!-- This is the "X" close button -->
        </button>
      </div>

      <div class="modal-body">
        <p><strong>Landline:</strong> 111-300-800</p>
        <p><strong>Email:</strong> <a href="mailto:online@limelight.pk">online@limelight.pk</a></p>
      </div>

    </div>
  </div>
</div>




<div class="container my-5">
 @yield('content') 
 
</div>



















<!-- footer part -->

<footer class="bg-dark pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row">

      <!-- Customer Care -->
      <div class="col-md-6 col-lg-6 mb-4">
        <h5 class="font-weight-bold text-white">CUSTOMER CARE</h5>
        <ul class="list-unstyled">
          <li><a href="#">ORDER TRACKING</a></li>
          <li><a href="#">SHIPPING & HANDLING</a></li>
          <li><a href="#">EXCHANGE POLICY</a></li>
          <li><a href="#">ORDER CANCELLATION POLICY</a></li>
          <li><a href="#">PRIVACY POLICY</a></li>
          <li><a href="#">TERMS OF USE</a></li>
          <li><a href="#">FAQ’S</a></li>
        </ul>
      </div>

      <!-- Information -->
      <div class="col-md-6 col-lg-6 mb-4">
        <h5 class="font-weight-bold text-white">INFORMATION</h5>
        <ul class="list-unstyled">
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">CONTACT US</a></li>
          <li><a href="#">CAREERS</a></li>
          <li><a href="#">STORE LOCATOR</a></li>
          <li><a href="#">BLOGS</a></li>
        </ul>
      </div>
    </div>

    <!-- Social Media & Payment -->
    <div class="text-center my-3">
      <a href="#"><img src="/images/facebook-logo.png" alt="Facebook" width="32" class="mx-2"></a>
      <a href="#"><img src="/images/logo-insta.jpg" alt="Instagram" width="32" class="mx-2"></a>
      <a href="#"><img src="/images/logo-youtube.png" alt="YouTube" width="32" class="mx-2"></a>

      <p class="mt-3 font-weight-bold text-white">We Accept</p>
      <img src="/images/logo-visa.png" alt="Visa" width="50" class="mx-1">
      <img src="/images/logo-mastercard.png" alt="Mastercard" width="50" class="mx-1">
    </div>

    <!-- Copyright -->
    <div class="text-center text-white small  mt-4">
      © 2025, Limelightpk Powered by Shopify 
    </div>
  </div>
</footer>







      




    
     
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 

  <script>
let cart = [];

function addToCart(id, name, price, image ,  category) {
    let existingItem = cart.find(item => item.id === id && item.category === category);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ id, name, price, image,  category, quantity: 1 });
    }
    updateCartDisplay();
    $('#cartModal').modal('show');
}

function updateCartDisplay() {
    const container = document.getElementById('cart-items-container');
    container.innerHTML = '';
    let grandTotal = 0;
    let totalItems = 0; // ✅ Count total quantity

    cart.forEach((item, index) => {
        const total = item.price * item.quantity;
        grandTotal += total;
        totalItems += item.quantity; // ✅ Add to total count

        container.innerHTML += `
            <div class="d-flex align-items-center mb-3 border-bottom pb-2">
               <img src="/images/${item.category}/${item.image}" width="60" class="mr-3" />
                <div class="flex-grow-1">
                    <h6 class="mb-1">${item.name}</h6>
                    <p class="mb-1">Price: Rs. ${item.price}</p>
                    <div class="input-group mb-1" style="width:130px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" onclick="decreaseQuantity(${index})">-</button>
                        </div>
                        <input type="text" class="form-control text-center" value="${item.quantity}" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" onclick="increaseQuantity(${index})">+</button>
                        </div>
                    </div>
                    <p class="mb-0 font-weight-bold">Total: Rs. ${total}</p>
                </div>
            </div>
        `;
    });

    // ✅ Show grand total
    document.getElementById('grand-total').innerText = grandTotal;

    // ✅ Update cart badge count
    const cartCount = document.getElementById('cart-count');
    if (cartCount) {
        cartCount.innerText = totalItems;
    }
}

function increaseQuantity(index) {
    cart[index].quantity++;
    updateCartDisplay();
}

function decreaseQuantity(index) {
    if (cart[index].quantity > 1) {
        cart[index].quantity--;
    } else {
        cart.splice(index, 1);
    }
    updateCartDisplay();
}
</script>

  </body>
</html>