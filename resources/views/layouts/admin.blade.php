<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
        <link href={{url("https://unpkg.com/aos@2.3.1/dist/aos.css")}} rel="stylesheet" />
        <link rel="stylesheet" href={{url("https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css")}} integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href={{url("/style/main.css")}} rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>

    @stack('addon-style')
  </head>

  <body>
   <div class="page-dashboard">
     <div class="d-flex" id="wrapper" data-aos="fade-right">
       <!-- Sidebar -->
       <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src={{url("./images/Admin/user.png")}} alt="" class="my-4" style="max-width:150px;" />
        </div>
        <div class="list-group list-group-flush">
          <a href={{ route('admin-dashboard') }} class="list-group-item list-group-item-action {{(request()->is('adpanel/dashboard*')) ? 'active' : '' }}">
            Dashboard
          </a>
          <a href={{ route('product.index') }} class="list-group-item list-group-item-action {{(request()->is('adpanel/product')) ? 'active' : '' }}">
            Products
          </a>
           <a href={{ route('product-gallery.index') }} class="list-group-item list-group-item-action {{(request()->is('adpanel/product-gallery*')) ? 'active' : '' }}">
            Galleries
          </a>
          <a href={{ route('category.index') }} class="list-group-item list-group-item-action {{(request()->is('adpanel/category*')) ? 'active' : '' }}">
            Categories
          </a>
           <a href={{ route('transaction.index')}} class="list-group-item list-group-item-action">
            Transactions
          </a>
           <a href={{ route('user.index') }}  class="list-group-item list-group-item-action {{(request()->is('adpanel/user*')) ? 'active' : '' }}">
            Users
          </a>
          <a href="index.html" class="list-group-item list-group-item-action">
            Sign Out
          </a>
        </div>
       </div>

       <!-- Page Content -->
       <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top " data-aos='fade-down'>
          <div class="container-fluid">
            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
              &laquo; Menu
            </button>
            <button class="navbar-toggler" type="button" data-toggle='collapse' data-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon">

              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Desktop Menu -->
               <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link" role="button" data-toggle="dropdown">
                    <img src={{url("./images/user.png")}} alt="" class="rounded-circle mr-2 profile-picture">
                    Hi, Depay
                  </a>
                  <div class="dropdown-menu">

                    <a href="/" class="dropdown-item">Logout</a>
                  </div>
                </li>
              </ul>

              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Hi, Depay
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block">
                    Cart
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Section Content -->
        @yield('content')

       </div>

     </div>
   </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    {{-- <script src={{url("../vendor/jquery/jquery.slim.min.js")}}></script> --}}

    <script src={{url("../vendor/jquery/jquery.min.js")}}></script>
    <script src={{url("../vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{url("https://unpkg.com/aos@2.3.1/dist/aos.js")}}></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>

    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      })
    </script>
    @stack('addon-script')
    <!-- <script src="../script/navbar-scroll.js"></script> -->
  </body>
</html>
