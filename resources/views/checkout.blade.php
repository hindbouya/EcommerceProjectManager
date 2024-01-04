<!DOCTYPE html>
<html>

<head>
    <title>Laravel 9 Shopping Cart add to cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Ishop</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head >
<body>

<div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span>
              Ishop
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="{{route('product')}}"> Products </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('/')}}"> Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
              </li>
            </ul>
            <div class="user_option-box">

              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-12">
                    <div class="dropdown">



   @if (auth()->check())
    @if (auth()->user()->isAdmin())
        <a href="{{ route('dashboard_admin') }}">
            <i class="fa fa-dashboard" aria-hidden="true"> Dashboard </i>
        </a>
        <a href="{{ route('cart') }}">
            <i class="fa fa-shopping-cart"></i> Cart
            
        </a>
    @else
        <a href="{{ route('cart') }}">
            <i class="fa fa-shopping-cart"></i> Cart
        </a>
        
        
        <a href="{{ route('logout') }}">
            <i class="fa fa-user" aria-hidden="true"> Logout </i>
        </a>
    @endif
@else
    <a href="{{ route('cart') }}">
        <i class="fa fa-shopping-cart"></i> Cart
        @if ($cartTotalQuantity)
            <span id="cartTotalQuantity">{{ $cartTotalQuantity }}</span>
        @endif
    </a>
    <a href="{{ route('login') }}">
        <i class="fa fa-user" aria-hidden="true"> Login </i>
    </a>
    <a href="{{ route('register') }}">
        <i class="fa fa-user-plus" aria-hidden="true"> Sign Up </i>
    </a>
@endif
















                     
                    </div>
                  </div>
                </div>
              </div>

              <br />
            </div>
          </div>
        </nav>
      </div>
    </header>


<body>


<div class="container" style="background-color: #B6EB8F ; padding: 20px;">
    <h1 style="text-align: center; color: #333;"></h1>
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <h3 style="color: #555;">Shipping Information</h3>
                <div class="form-group">
                    <label for="shipping_name">Full Name</label>
                    <input type="text" class="form-control" id="shipping_name" name="shipping_name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <label for="shipping_address">Address</label>
                    <input type="text" class="form-control" id="shipping_address" name="shipping_address" placeholder="Address" required>
                </div>
                <div class="form-group">
                    <label for="shipping_city">City</label>
                    <input type="text" class="form-control" id="shipping_city" name="shipping_city" placeholder="City" required>
                </div>
                <div class="form-group">
                    <label for="shipping_country">Country</label>
                    <input type="text" class="form-control" id="shipping_country" name="shipping_country" placeholder="Country" required>
                </div>
                <!-- Autres champs d'information d'expédition -->
            </div>
            <div class="col-md-6">
                <h3 style="color: #555;">Payment Information</h3>
                <div class="form-group">
                    <label for="card_number">Card Number</label>
                    <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" required>
                </div>
                <div class="form-group">
                    <label for="card_expiry">Expiry Date</label>
                    <input type="text" class="form-control" id="card_expiry" name="card_expiry" placeholder="MM/YY" required>
                </div>
                <div class="form-group">
                    <label for="card_cvv">CVV</label>
                    <input type="text" class="form-control" id="card_cvv" name="card_cvv" placeholder="CVV" required>
                </div>
                <!-- Autres champs d'information de paiement -->
            </div>
        </div>
        <!-- Récapitulatif de la commande -->
        <h3 style="text-align: center; color: #555;">Order Summary</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->product->price }}</td>
                    <td>{{ $item->quantity * $item->product->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <h4>Total: ${{ $total }}</h4>
        </div>
        <!-- Fin du récapitulatif de la commande -->
        <div class="text-center">
        <button type="submit" style="background-color:#65F52B ; width: 30%; height: 51px; font-size: 18px; color: #fff; border: none; border-radius: 5px;">Pay Now</button>
            <button style="background-color: #65F52B ; width: 30%; height: 52px; font-size: 18px; color: #fff; border: none; border-radius: 5px;">
                <a href="{{ route('cart') }}" class="btn" style="color: #fff; text-decoration: none;">Return to Cart</a>
            </button>
            
        </div>
    </form>
</div>
    </body>

</html>
