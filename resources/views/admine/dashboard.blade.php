<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Admine</title>
  <link rel="stylesheet" href="/css/userstyles.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
  
  <style>
    .widget-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .widget-small {
      flex: 1;
      margin-right: 10px;
      background-color: #53CF37;
    }

    .widget-small:last-child {
      margin-right: 0;
    }

    .widget-count {
      font-size: 30px;
      color: #333  ;
    }

    .small-box-footer {
      color: #777;
      text-decoration: none;
      display: inline-block;
      margin-top: 10px;
      transition: color 0.3s;
    }

    .small-box-footer:hover {
      color: #333;
    }
  </style>
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="/" class="logo">
         
          <span class="nav-item">Admin For Ishop</span>
        </a></li>
        <li><a href="{{route('/')}}">
          <i class="fas fa-home"></i>
          <span class="nav-item">Ishop</span>
        </a></li>
        <li><a href="{{route('home')}}">
          <i class="fas fa-tachometer-alt"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>

        <li><a href="{{route('admin.contacts')}}">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Contacts</span>
        </a></li>
        <li><a href="{{route('admin.users')}}">
          <i class="fas fa-user"></i>
          <span class="nav-item">Users</span>
        </a></li>
        <li>
    <a href="{{ route('dashboard_admin') }}">
        <i class="fas fa-shopping-bag"></i>
        <span class="nav-item">Products</span>
    </a>
</li>


<li>
    <a href="{{route('products.create')}}">
        <i class="fas fa-plus"></i>
        <span class="nav-item">Add Products</span>
    </a>
</li>

        

        <li><a href="{{route('admin.logout')}}" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


 <!-- admin.dashboard.blade.php -->
 <section class="main">
      <h1>Dashboard</h1>
      <div class="widget-container">
        <div class="widget-small primary coloured-icon">
          <i class="fas fa-envelope fa-3x"></i>
          <div class="details">
            <h4 class="widget-title">The number of contacts</h4>
            <p class="widget-count">{{ \App\Models\Contact::count() }}</p>
            <a href="{{route('admin.contacts')}}" class="small-box-footer">More information <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="widget-small primary coloured-icon">
          <i class="fas fa-users fa-3x"></i>
          <div class="details">
            <h4 class="widget-title">The number of users</h4>
            <p class="widget-count">{{ \App\Models\User::count() }}</p>
            <a href="{{route('admin.users')}}" class="small-box-footer">More information <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="widget-small primary coloured-icon">
          <i class="fas fa-cube fa-3x"></i>
          <div class="details">
            <h4 class="widget-title">Total number of products</h4>
            <p class="widget-count">{{ \App\Models\Product::count() }}</p>
            <a href="{{route('dashboard_admin')}}" class="small-box-footer">More information <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>