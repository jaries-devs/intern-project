<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel 8 User Roles and Permissions Tutorial') }}</title>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f8c7a39489.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
         <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
</head>
<body>
    <div id="app">
    @guest
    @else
    <div class="sidenav d-flex flex-column flex-shrink-0 p-3 bg-light " style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
      
      @can('dashboard-access')
      <li class="nav-item">
          <a href="{{ route('dashboard.index') }}" class="nav-link link-dark">
          <i class="fa-solid fa-house"></i>
            Dashboard
          </a>
        </li>
      @endcan

      @can('user-list','user-create', 'user-edit', 'user-delete')
      <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link link-dark">
        <i class="fa-solid fa-user"></i>
          Manage User
        </a>
      </li>
      @endcan

      @can('role-list','role-create','role-edit', 'user-delete')
      <li class="nav-item">
        <a href="{{ route('roles.index') }}" class="nav-link link-dark">
        <i class="fa-solid fa-users-line"></i>
          Manage Role
        </a>
      </li>
      @endcan

      @can('permission-list','permission-create','permission-edit', 'permission-delete')
      <li class="nav-item">
        <a href="{{ route('permissions.index') }}" class="nav-link link-dark">
        <i class="fa-solid fa-user-check"></i>
          Manage Permission
        </a>
      </li>
      @endcan

      @can('product-list','product-create','product-edit', 'product-delete')
      <li class="nav-item">
        <a href="{{ route('products.index') }}" class="nav-link link-dark">
        <i class="fa-solid fa-cart-shopping"></i>
          Manage Products
        </a>
      </li>
      @endcan

      <li class="nav-item">
        <a href="{{ route('profile.index') }}" class="nav-link link-dark">
            <i class="fa-solid fa-gear"></i>
          Profile Settings
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('password') }}" class="nav-link link-dark">
          <i class="fa-solid fa-key"></i>
          Change Password
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link link-dark" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
         <i class="fa-solid fa-arrow-right-from-bracket"></i>
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      </li>
    </ul>
  </div>   
  @endguest



        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>