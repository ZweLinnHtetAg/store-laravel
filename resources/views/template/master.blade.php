<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('custom/css/style.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">    
  </head>
  <body>
		
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url({{ asset('custom/images/logo.jpg') }});"></a>
            <ul class="list-unstyled components mb-5">
              
            <li>
                    <a href="#">Home</a>
            </li>
              <li>
                  <a href="{{ url('categories') }}">Categories</a>
              </li>
              {{-- <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
              </li> --}}
              {{-- <li>
              <a href="#">Portfolio</a>
              </li>
              <li>
              <a href="#">Contact</a>
              </li> --}}
            </ul>


          </div>
        </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('categories') }}">Categories</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a> --}}
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">@yield('heading')</h2>
        
        @yield('content')
      </div>
        </div>

    <script src="{{ asset('custom/js/jquery.min.js') }}"></script>
    <script src="{{ asset('custom/js/popper.js')}}"></script>
    <script src="{{ asset('custom/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('custom/js/main.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>