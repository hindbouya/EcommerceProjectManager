<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard | Admine</title>
    <link rel="stylesheet" href="/css/userstyles.css" />

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

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

        .form-container .form-group {
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-container .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container .btn {
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

        .form-container .btn:hover {
            background-color: #0056b3;
        }

        .form-container .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .form-container .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .form-container .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .form-container .alert li {
            margin-bottom: 5px;
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
                <h1>Add Products</h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" required>
                    </div>
                    <div class="form-group">
                        <label for="product_description">Product Description</label>
                        <textarea class="form-control" id="product_description" name="product_description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">Product Photo</label>
                        <input type="file" class="form-control-file" id="photo" name="photo" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>
