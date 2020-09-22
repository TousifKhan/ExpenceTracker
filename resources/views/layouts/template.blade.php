<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Expence Tracker') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="wrapper elevation-4">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    @include('commons.topbar')
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @can('admin')
      @include('commons.sidebar')
    @elsecan('auditor')
      @include('commons.user-sidebar')
    @endcan
    @can('user')
      @include('commons.user-sidebar')
    @endcan
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="z-index: 0 !important;">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    @include('commons.footer')
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/') }}js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/') }}/js/demo.js"></script>

</body>
</html>
