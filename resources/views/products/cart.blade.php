<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
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
                <a class="nav-link" href="{{route('/')}}"> Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('product')}}"> Products </a>
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
    <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cartItems as $item)
        <tr data-id='{{$item->id}}'>
            <td data-th="Product">
                <div class="row product_data">
                    <div class="col-sm-3 hidden-xs"><img src="{{asset('img/'.$item->product->photo)}}" width="100" height="100" class="img-responsive" /></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{$item->product->product_name}} </h4>
                    </div>
                </div>
            </td>
            <td data-th="Price"> {{$item->product->price}}</td>
            <td data-th="Quantity">
            <input type="number" name="quantity" value="{{$item->quantity}}" class="form-control quantity cart_update" min="1" data-itemid="{{$item->id}}" />
            </td>
            <td data-th="Subtotal" class="text-center">{{$item->product->price * $item->quantity}}</td>

            <td class="actions" data-th="">
                <form action="{{ route('remove_from_cart') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="itemId" value="{{$item->id}}">
                    <button type="submit" class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
        @php
    $total = 0;
    foreach ($cartItems as $item) {
        $subtotal = $item->product->price * $item->quantity;
        $total += $subtotal;
    }
@endphp
        <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>

        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                @if (auth()->check())
    <td colspan="5" class="text-right">
        <a href="{{ route('checkout') }}" class="btn btn-success">
            <i class="fa fa-money"></i> Checkout
        </a>
    </td>
@endif

        </tr>
    </tfoot>
</table>

    

</div>

<script>
    $(document).ready(function() {
        $('.cart_update').on('input', function() {
            var itemId = $(this).data('itemid');
            var quantity = $(this).val();

            $.ajax({
                url: '/update-cart/' + itemId,
                method: 'PUT',
                data: {
                    quantity: quantity,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Traitement réussi (optionnel)
                    // Vous pouvez actualiser la page ou effectuer d'autres actions

                    // Exemple: actualiser la page
                    location.reload();
                },
                error: function(xhr) {
                    // Traitement en cas d'erreur (optionnel)
                    // Vous pouvez afficher un message d'erreur ou effectuer d'autres actions
                }
            });
        });
    });
</script>













</body>

</html>