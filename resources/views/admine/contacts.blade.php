
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Admine</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="/css/userstyles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
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
      
     

      <section class="attendance">
        <div class="attendance-list">
          <h1>Contacts list</h1>
          <table  class="table">
            <thead>
              <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Message</th>
              </tr>
            </thead>
            <tbody>
             
            @foreach($contacts as $contact)
          <tr>
            <td>{{ $contact->fullname }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phonenumber }}</td>
            <td>{{ $contact->message }}</td>
          </tr>
        @endforeach 
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
  
</body>
</html>

