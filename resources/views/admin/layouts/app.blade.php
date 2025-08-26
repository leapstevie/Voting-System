<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Shop :: Administrative Panel </title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-assets/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/dropzone/dropzone.css') }}">

  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Right navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <div class="navbar-nav pl-2">
        <!-- <ol class="breadcrumb p-0 m-0 bg-white">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol> -->
      </div>

    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      @yield('content')

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

      <strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
    </footer>

  </div>
  <!-- jQuery -->
  <script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>

  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('admin-assets/js/adminlte.min.js') }}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('admin-assets/js/demo.js') }}"></script>

  <script type="text/javaspicpt">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
  @yield('customerJS')
</body>

</html>