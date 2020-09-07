<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- my CSS -->
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('admin/dist/css/my.css')}}">
    @yield('style')
</head>

<body class="hold-transition sidebar-mini ">
    <div class="wrapper">

        <!-- Navbar -->
        @include('include/_navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('include/_aside')
        <!-- aside -->

        <!-- akhir aside -->

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        @include('include/_controlSidebar')
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    <script src="{{asset('admin/dist/js/pages/dashboard3.js')}}"></script>
    @yield('script')

</body>

</html>