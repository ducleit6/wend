<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin-@yield('title')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{url('public/admin')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/plugins/toastr/toastr.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/dist/css/adminlte.min.css">
    @yield('css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-admin-aside />
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="pl-2 mt-2 mb-2">@yield('title')</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                @yield('main')
            </section>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="">Ender</a>.</strong> All rights reserved.
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="{{url('public/admin')}}//plugins/jquery/jquery.min.js"></script>
    <script src="{{url('public/admin')}}//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public/admin')}}//plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{url('public/admin')}}//plugins/toastr/toastr.min.js"></script>
    <script src="{{url('public/admin')}}//dist/js/adminlte.min.js"></script>
    <script src="{{url('public/admin')}}//dist/js/demo.js"></script>
    @yield('js')
    <script>
    toastr.options = {
        "closeButton": false,
        "debug": true,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>
    @if(Session::has('yes'))
    <script>
    toastr["success"]("{{Session::get('yes')}}")
    </script>
    @endif
    @if(Session::has('no'))
    <script>
    toastr["error"]("{{Session::get('no')}}")
    </script>
    @endif
</body>
</html>