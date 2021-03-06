<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('images/LOGO himatika 2019.png')}}"
          type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('vendor/fontawesome-free/css/all.min.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/sb-admin-2.min.css')}}">
    {{--end custom template--}}

    {{--    tamplate datatables--}}
    <link rel="stylesheet" href="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.css')}}">
    {{--    end template--}}

    {{--    sunmmernote--}}
    {{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>--}}
    <script src="{{ asset ('vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link rel="stylesheet" href="{{ asset ('css/summernote.min.css')}}">
    <script src="{{ asset ('js/summernote.min.js')}}"></script>
    {{--    summmernote--}}

    {{--    sweet alert--}}
    {{--    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">--}}
    {{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>--}}

<!-- DataTables -->
    {{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

    {{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>--}}
    {{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>--}}
    {{--    <!-- <script src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.js"></script> -->--}}
    {{--    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>--}}
    {{--    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" ></script>--}}


</head>
<body id="page-top">
<div id="wrapper">

    <!-- Sidebar -->
@include('layouts.admin.sidebar')

<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <nav
                class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow justify-content-between">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                @include('layouts.admin.navbar')
            </nav>
            @yield('content')
        </div>
        {{--        <footer class="sticky-footer bg-white" style="height: 50px">--}}
        {{--            <div class="container my-auto">--}}
        {{--                <div class="copyright text-center my-auto">--}}
        {{--                    <span>Copyright &copy; Your Website 2020</span>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </footer>--}}
    </div>
</div>
{{--<a class="scroll-to-top rounded" href="#page-top">--}}
{{--    <i class="fas fa-angle-up"></i>--}}
{{--</a>--}}
{{--<script src="{{ asset ('vendor/datatables/jquery.dataTables.min.js')}}"></script>--}}
{{--<script src="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>--}}
<script src="{{ asset ('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset ('js/sb-admin-2.min.js')}}"></script>
</body>
</html>
