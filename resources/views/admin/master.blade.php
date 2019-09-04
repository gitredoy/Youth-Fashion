<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}/admin/assets/images/favicon.png">
    <title>YOUTH FASHION -  Admin Panel</title>
    <!-- Custom CSS -->
    <link href="{{asset('/')}}/admin/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}/admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/admin/assets/extra-libs/multicheck/multicheck.css">
    <link href="{{asset('/')}}/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/dist/css/custom.css" rel="stylesheet">



    @stack('css')



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
 @include('admin.includes.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('admin.includes.aside')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        @yield('body')
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Youth Fashion. Designed and Developed by <a href="https://facebook.com/nasim.redoy" >Nasim Redoy</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('/')}}/admin/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/')}}/admin/dist/js/jquery.ui.touch-punch-improved.js"></script>
<script src="{{asset('/')}}/admin/dist/js/jquery-ui.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/')}}/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('/')}}/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/')}}/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('/')}}/admin/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('/')}}/admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('/')}}/admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('/')}}/admin/dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="{{asset('/')}}/admin/assets/libs/moment/min/moment.min.js"></script>
<script src="{{asset('/')}}/admin/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="{{asset('/')}}/admin/dist/js/pages/calendar/cal-init.js"></script>

<!-- this page js 2 -->
<script src="{{asset('/')}}/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="{{asset('/')}}/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="{{asset('/')}}/admin/assets/extra-libs/DataTables/datatables.min.js"></script>


<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>

{{--CK-EDITOR --}}
{{--<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>--}}
<script>
    // CKEDITOR.replace( 'summary-ckeditor' );
</script>
@stack('js')
</body>

</html>