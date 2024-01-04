<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <meta charset="utf-8" />
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
</head>

<body>

  <body class="sub_page">

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
                  <a class="nav-link" href="{{route('/')}}"> Home </a>
                </li>
             
                <li class="nav-item">
                  <a class="nav-link" href="{{route('product')}}"> Products</a>
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






    </div>

    <div class="container">
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      @yield('content')
    </div>


    <section class="contact_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <div class="heading_container">
                <h2>
                  Contact Us
                </h2>
              </div>
              <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div>
                  <input type="text" name="fullname" placeholder="Full Name " required />
                </div>
                <div>
                  <input type="email" name="email" placeholder="Email" required />
                </div>
                <div>
                  <input type="text" name="phonenumber" required placeholder="Phone number" />
                </div>
                <div>
                  <input type="text" name="message" class="message-box" placeholder="Message" required />
                </div>
                <div class="d-flex ">
                  <button type="submit"> SEND</button>

                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/contact-img.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->

    <!-- footer section -->
    <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
            At IShop, we are committed to providing high quality.
            </p>
            <div class="footer_social">
            <a href="https://fr-fr.facebook.com/">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="https://www.linkedin.com/">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
      <a href="https://www.instagram.com/">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +0000 0000 0000
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Ishop@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Ishop</a>
        </p>
      </div>
    </div>
  </footer>
    <!-- footer section -->
  
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->

    @yield('scripts')

  

  </body>

</html>