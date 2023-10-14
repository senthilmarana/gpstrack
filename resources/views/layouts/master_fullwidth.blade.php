<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="sproutwings is real time gps tracking system in all over india. Our products are personal tracker, asset tracker, vechicle tracker, personal tracker, fleet tracker etc.." name="description" />
    <meta content="Sproutwings" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">
    @include('layouts.head-css')
</head>

@section('body')
    <body data-sidebar="light" data-keep-enlarged="true" class="vertical-collpsed">
    <!--<body data-sidebar="dark" data-layout-mode="light">-->
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content" style="margin-left:5px;">
            <div class="page-content" style="padding-top:75px;">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
</body>

</html>
