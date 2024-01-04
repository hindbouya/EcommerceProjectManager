<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Admine</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="/css/userstyles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    /* Styles pour le formulaire */
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 5px;
    }

    .form-container h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-container .row {
      margin-bottom: 20px;
    }

    .form-container label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-container input[type="text"],
    .form-container textarea {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-container button[type="submit"] {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      color: #fff;
      background-color: #007bff;
      border: none;
      cursor: pointer;
    }

    .form-container button[type="submit"]:hover {
      background-color: #0056b3;
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

    <section class="main">
      <div class="main-top">
        
      </div>
      
      <div class="form-container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <label for="product_name">Product Name</label>
              <input type="text" name="product_name" value="{{ $product->product_name }}">
            </div>

            <div class="row">
              <label for="product_description">Product Description</label>
              <textarea name="product_description">{{ $product->product_description }}</textarea>
            </div>

            <div class="row">
              <label for="photo">Photo</label>
              <input type="file" name="photo">
            </div>

            <div class="row">
              <label for="price">Price</label>
              <input type="text" name="price" value="{{ $product->price }}">
            </div>

            <button type="submit">Update</button>
        </form>
      </div>
    </section>
  </div>
</body>
</html>
