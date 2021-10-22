<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{ url('public/project') }}/img/favicon/favicon-96x96.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ url('public/project') }}/Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="{{ url('public/project') }}/font/css/all.min.css">
  <link rel="stylesheet" href="{{ url('public/project') }}/font/flatio/flaticon.css">
  <link rel="stylesheet" href="{{ url('public/project') }}/css/animation.css">
  <link rel="stylesheet" href="{{ url('public/project') }}/plugin/toastr/toastr.min.css">
  <link rel="stylesheet" href="{{ url('public/project') }}/carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="{{ url('public/project') }}/carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ url('public/project') }}/css/style.css">
  @yield('css')
</head>
  <body>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-8 col-12">
                    <div class="main-flex-top">
                        <div class="email sel d-flex">
                            <div class="main-email-text d-flex">
                                <i class="fas fa-envelope"></i>
                                <p>infp@a2z.com </p>
                            </div>
                            <div class="main-loc-text d-flex">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>78 5th Ave, New York, Ny 10011, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 d-md-block d-sm-none  d-none">
                    <div class="login-area d-flex justify-content-end">
                        <div class="select-area">
                            <img src="img/common-img/flg.png" alt="img">
                            <select name="cars">
                            <option value="us">USA</option>
                            <option value="vn">VIE</option>
                            <option value="chi">CHN</option>
                            <option value="jp">JAP</option>
                        </select>
                        </div>
                        <div class="user-log">
                        @if(Auth::check())
                            <u><a href="{{route('update-user' , Auth::user()->id)}}">{{Auth::user()->name}}</a></u>
                            <i><a href="{{route('home-logout')}}">Logout</a></i>
                        @else
                            <i class="far fa-user-circle"></i>
                            <a href="{{route('home-login')}}">Sign In</a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
                    <a class="navbar-brand" href="{{route('home')}}"><img src="{{ url('public/project') }}/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="tour-packages.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Trip packages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="tour-packages.html">Tour Pagkages</a>
                                        <a class="dropdown-item" href="tour-details.html">Tour Detail</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.html">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('blogs.view')}}">Blog-Classic</a>
                                        <a class="dropdown-item" href="{{route('blogs.create')}}">Blog-Create</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Page
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="about.html">About</a>
                                        <a class="dropdown-item" href="{{route('FAQs.view')}}">Faqs</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('main')
    <div id="footer-all-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="all-fott-cov">
                        <div class="footer0logo">
                            <a href="#"><img src="{{ url('public/project') }}/img/logo.png" alt="img" /></a>
                        </div>
                        <div class="footer-para">
                            <p>
                                Pellentesque convallis, diam et feugiat volutpat, tellus ligula consequat augue, quis malesuada nisi ante nec metus. Sed id pretium nunc. Mauris vitae porttitor tortor. Fusce aliquet ac metus eget egestas.
                            </p>
                        </div>
                        <div class="footer-form">
                            <div class="form-group d-flex">
                                <input type="text" placeholder="Enter your email" class="form-control" />
                                <button class="btn plean-footer">
                      <i class="fab fa-telegram-plane"></i>
                    </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="quick-link">
                        <div class="comm-foot-hed">
                            <h6>Quick Links</h6>
                        </div>
                        <div class="foot-list">
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="tour-packages.html">Tours & Trips</a></li>
                                <li><a href="tour-details.html">Locations Find</a></li>
                                <li><a href="contact.html">Contact Us.</a></li>
                                <li><a href="faqs.html">Terms & conditions</a></li>
                                <li><a href="faqs.html">Praivcy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="quick-link-2">
                        <div class="foot-list-2">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="faqs.html">Testimonials</a></li>
                                <li><a href="gallery.html">Team</a></li>
                                <li><a href="services.html">Service</a></li>
                                <li><a href="blog.html">News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="recent-fot-post mar-top-responsive">
                        <div class="comm-foot-hed">
                            <h6>Recent Post</h6>
                        </div>
                        <div class="post-cover-foot">
                            <div class="pos-rece-1">
                                <div class="post-rect-img">
                                    <a href="blog-single.html"><img src="{{ url('public/project') }}/img/common-img/footer-blog.png" alt="" /></a>
                                </div>
                                <div class="podt-text-1">
                                    <p>
                                        <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
                          tellus ligula c</a>
                                    </p>
                                    <span>Sep 09, 2019</span>
                                </div>
                            </div>
                            <div class="pos-rece-1">
                                <div class="post-rect-img">
                                    <a href="blog-single.html"><img src="{{ url('public/project') }}/img/common-img/footer-blog-1.png" alt="" /></a>
                                </div>
                                <div class="podt-text-1">
                                    <p>
                                        <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
                          tellus ligula c</a>
                                    </p>
                                    <span>Sep 09, 2019</span>
                                </div>
                            </div>
                            <div class="pos-rece-1">
                                <div class="post-rect-img">
                                    <a href="blog-single.html"><img src="{{ url('public/project') }}/img/common-img/footer-blog-2.png" alt="" /></a>
                                </div>
                                <div class="podt-text-1">
                                    <p>
                                        <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
                          tellus ligula c</a>
                                    </p>
                                    <span>Sep 09, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footre-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-8 col-8">
                    <div class="copy-right-para">
                        <p>And IT Themes © 2019. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 col-4">
                    <div class="copy-right-icon">
                        <a href="#"><i class="fab fa-facebook-f face no-ag"></i></a>
                        <a href="#"><i class="fab fa-twitter face"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in face"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="{{ url('public/project') }}/jquery/jquery.min.js"></script>
<script src="{{ url('public/project') }}/Bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('public/project') }}/carousel/owl.carousel.min.js"></script>
<script src="{{ url('public/project') }}/plugin/validate/jquery.validate.js"></script>
<script src="{{ url('public/project') }}/plugin/toastr/toastr.min.js"></script>

<script>
    $('.ab-slid').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        dots: false,
    })
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
    $('.slider-des').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 2,

            },
            1000: {
                items: 3,


            }
        }
    })
    $('.test-slider-home-1').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,

    })
</script>
<script>
    toastr.options = {
    "progressBar": false,
    "positionClass": "toast-top-right",
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
@if(Session::has('no'))
<script>
toastr["error"]("{{Session::get('no')}}")
</script>
@endif
@if(Session::has('yes'))
<script>
toastr["success"]("{{Session::get('yes')}}")
</script>
@endif
@yield('js')
</html>
