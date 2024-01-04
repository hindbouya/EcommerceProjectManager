




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
      <div class="main-top">
      </div>
     

      <section class="attendance">
        <div class="attendance-list">
          <h1>Users List</h1>
          <table  class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
             
              <tr class="active">
              @foreach($users as $user)
              @if($user->usertype !== 'admin')
              <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
              </tr>
              @endif
              @endforeach
              </tr>
              
              <!-- <tr >
                <td>05</td>
                <td>Salina</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
  </script>
  Bootstrap JS included
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>

</body>
</html>
