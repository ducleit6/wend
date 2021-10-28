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
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar" style="overflow-y: revert">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{url('public/admin')}}/dist/img/avataer.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Hi, Admin </a>
                        <a href="" class="d-block">Thoát</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Quản Lý Danh mục
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item p-2">
                                    <a href="{{route('category.index')}}" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item p-2">
                                    <a href="{{route('category.trashed')}}" class="nav-link">
                                        <i class="fas fa-trash nav-icon"></i>
                                        <p>Thùng rác</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-map-marked"></i>

                                <p>
                                    Quản Lý Điểm Đến
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item p-2">
                                    <a href="{{route('destination.index')}}" class="nav-link">

                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item p-2">
                                    <a href="{{route('destination.trashed')}}" class="nav-link">
                                        <i class="fas fa-trash nav-icon"></i>
                                        <p>Thùng rác</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <i class="nav-icon fas fa-plane-departure"></i>
                                <p>
                                    Quản Lý Chuyến đi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item p-2">
                                    <a href="{{route('tour.index')}}" class="nav-link">

                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item p-2">
                                    <a href="{{route('destination.trashed')}}" class="nav-link">
                                        <i class="fas fa-trash nav-icon"></i>
                                        <p>Thùng rác</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('create-acc')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin Plus</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-servicestack"></i>
                                <p>
                                    Quản lý dịch vụ
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('services.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Quản lý Bài Đăng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('blogs.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    Quản lý Câu hỏi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('FAQs.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('FAQs.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Quản lý danh mục câu hỏi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('CategoryFAQs.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('CategoryFAQs.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
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
