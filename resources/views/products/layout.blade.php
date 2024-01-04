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
  <div class="hero_area">
    <div class="hero_social">
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
    <a class="nav-link" href="javascript:void(0);" onclick="scrollToSection('products-section')">About</a>
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


    <!--
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide1.png  " alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide4.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide5.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide6.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide7.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
-->


  <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At IShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At iShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At iShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide3.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At iShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide4.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At IShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide5.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At IShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide6.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At IShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide7.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At IShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide8.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At IShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide9.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ishop
                    </h1>
                    <p>
                      At IShop, we are committed to providing high quality, genuine products, direct from the manufacturer. Whether you're looking for the latest iPhone, stylish cases, wireless chargers or other essential accessories, you'll find everything you need to complete your Apple experience.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('contact')}}" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slide10.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
          <li data-target="#customCarousel1" data-slide-to="4"></li>
          <li data-target="#customCarousel1" data-slide-to="5"></li>
          <li data-target="#customCarousel1" data-slide-to="6"></li>
          <li data-target="#customCarousel1" data-slide-to="7"></li>
          <li data-target="#customCarousel1" data-slide-to="8"></li>
          <li data-target="#customCarousel1" data-slide-to="9"></li>

        </ol>
      </div>

    </section>
    
<br>
<br>


  </div>

  <div class="container">
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    @yield('content')
  </div>
<br>
<br>

<section id="products-section">
<section class="about_section layout_padding" style="width: 86%; margin: auto;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="w-100" controls>
                    <source src="{{ asset('videos/Apple Commercial made in Blender.mp4') }}" type="video/mp4">
                    Votre navigateur ne prend pas en charge la balise vidéo.
                </video>
            </div>
            <!-- Ajoutez les autres diapositives ici -->
            <div class="carousel-item">
                <video class="w-100" controls>
                    <source src="{{ asset('videos/3D product animation _ Smart Watch.mp4') }}" type="video/mp4">
                    Votre navigateur ne prend pas en charge la balise vidéo.
                </video>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
</section>
</section>
<br>
<br>
<br>

<div class="centered-button">
    <a href="{{route('product')}}" class="btn">Buy Now</a>
</div>


<style>
.centered-button {
  text-align: center;
 
  
}

.centered-button a {
 width: 20%;
  text-decoration: none;
  display: inline-block;
  padding: 12px 15px;
  background-color: #6c8eed;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #6c8eed;

}

.centered-button a:hover {
  color: #ffffff;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);;
}


</style>


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

  <script>
    // Récupérer l'élément du nombre de produits dans le panier
    var cartItemCount = document.getElementById('cartItemCount');
    // Ajouter un gestionnaire d'événement pour le clic sur le bouton "Add to Cart"
    var addToCartBtn = document.getElementById('addToCartBtn');
    addToCartBtn.addEventListener('click', function() {
      // Récupérer le nombre actuel de produits dans le panier
      var currentCount = parseInt(cartItemCount.innerHTML);
      // Incrémenter le nombre de produits dans le panier
      var newCount = currentCount + 1;
      // Mettre à jour le nombre de produits affiché dans le panier
      cartItemCount.innerHTML = newCount;
    });
  </script>

<script>
    function scrollToSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>
  <!-- footer section -->

  @yield('scripts')
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->


</body>

</html>