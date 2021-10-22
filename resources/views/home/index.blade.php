@extends('layout.master')

@section('main')
    <div class="slide-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 col-sm-12 col-12">
                    <div class="banner-text animated animatedFadeInUp fadeInUp">
                        <h6>WELCOME TO</h6>
                        <h1>Discover Amazing Places of the world</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna tempor invidunt ut
                        </p>
                        <div class="button-common">
                            <a href="#!" class="btn btn-1">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-2 col-sm-12 col-12">
                    <div class="video-play-banner">

                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-play"></i>
                        </button>
                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <iframe width="900" height="500" src="https://www.youtube.com/embed/T5Yu6CGPaqA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ab-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 main-com">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                Search Tour
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <i class="fas fa-city amr"></i> Hotel
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-map-marker-alt"></i></span>
                                            <select>
                                                <option value="0"> Destination</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div id="datepicker-2" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <span class="input-group-addon sec-po"><i class="far fa-calendar-alt"></i></span>
                                            <input class="form-control" type="text" placeholder="Check In" />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <span class="input-group-addon sec-po"><i class="far fa-calendar-alt"></i></span>
                                            <input class="form-control" type="text" placeholder="Check Out" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-bed"></i></span>
                                            <select>
                                                <option value="0"> Hotel</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-lex justify-content-end">
                                    <div class="book-ctn">
                                        <a href="#!" class="btn btn-2 pad">Search Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-map-marker-alt"></i></span>
                                            <select>
                                                <option value="0"> Destination</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div id="datepicker-2" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <span class="input-group-addon sec-po"><i class="far fa-calendar-alt"></i></span>
                                            <input class="form-control" type="text" placeholder="Check In" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <span class="input-group-addon sec-po"><i class="far fa-calendar-alt"></i></span>
                                            <input class="form-control" type="text" placeholder="Check Out" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-bed"></i></span>
                                            <select>
                                                <option value="0"> Hotel</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="all-class">
                                        <div class="bugest-info">
                                            <span>
                                                Budget Now:
                                            </span>
                                        </div>
                                        <div class="buget">
                                            <input type="range" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="book-ctn d-flex justify-content-end">
                                        <a href="#!" class="btn btn-2 pad">Search Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="left-side-text-ab max-live">
                        <h6>Amazing Places To Enjony Your Travel</h6>
                        <h2>About Our <span>A2Z</span> Travel</h2>
                        <p>
                            Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus.
                        </p>
                        <p>
                            Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor, accumsan at consequat et, tempus sit ame
                        </p>
                        <a href="#!" class="btn btn-2 mar-top">Search Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="owl-carousel owl-theme ab-slid">
                        <div class="item"><img src="{{ url('public/project') }}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{ url('public/project') }}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{ url('public/project') }}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{ url('public/project') }}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{ url('public/project') }}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{ url('public/project') }}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{ url('public/project') }}/img/common-img/about-img.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="amazing">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-lg-block d-md-none  d-none">
                    <div class="amazing-img">
                        <img src="{{ url('public/project') }}/img/common-img/amagin.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="left-side-text-ab mar-p mar-o">
                        <h6>Amazing Places To Enjony Your Travel</h6>
                        <h2>Amazing Plan for <span>our customer</span></h2>
                        <p>
                            Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus.
                        </p>
                    </div>
                    <div class="grun-img shape-3">
                        <img src="{{ url('public/project') }}/img/common-img/roted.png" alt="img">
                    </div>
                    <div class="all-service-travel  d-flex  justify-content-center .flex-sm-column">
                        <div class="flight-cover">
                            <i class="fas fa-plane"></i>
                            <p>Flight</p>
                        </div>
                        <div class="flight-cover">
                            <i class="fas fa-ship"></i>
                            <p>Ship</p>
                        </div>
                        <div class="flight-cover">
                            <i class="fas fa-car"></i>
                            <p>Car</p>
                        </div>
                        <div class="flight-cover">
                            <i class="fas fa-subway"></i>
                            <p>Tranis</p>
                        </div>
                        <div class="flight-cover">
                            <i class="fas fa-bed"></i>
                            <p>Hotel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tour-des">
        <div class="container">
            <div class="row">
                <div class="content-box text-center text">
                    <h6>Travel Express Provide</h6>
                    <h2>Select your <span>Destination</span></h2>
                    <p>
                        Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.
                    </p>
                </div>
                <div class="slider-des owl-carousel owl-theme">
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-1.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>Thailand <span>1day 160$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-2.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>South Afreeca <span>3day 500$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-3.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>Australia <span>5day 1380$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-1.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>Thailand <span>1day 160$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-2.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>South Afreeca <span>3day 500$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-3.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>Australia <span>5day 1380$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-1.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>Thailand <span>1day 160$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-2.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>South Afreeca <span>3day 500$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{ url('public/project') }}/img/tour-destanation/d-3.png" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>Australia <span>5day 1380$</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                    Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis sed
                                </p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn col-50">
                                    <a href="#" class="btn btn-2" data-toggle="modal" data-target="#staticBackdrop">Book Now</a>
                                </div>
                                <div class="start-icon-des col-50">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="summer">
        <div class="container">
            <div class="row">
                <div class="sum">
                    <div class="summer-text">
                        <h6>Summer Special</h6>
                        <p><span>25%</span> off</p>
                        <h6>Spend The best vaction with us</h6>
                        <h2>The nights of Thailand</h2>
                    </div>
                    <div class="all-spance">4days / 5nights</div>
                    <div class="summer-btn d-flex justify-content-center">
                        <a href="" class="btn btn-2">VIEW DETAIL</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="team-home">
        <div class="content-box">
            <h6>Travel Guides, Tips & Advice</h6>
            <h2>Travel <span>Agents</span></h2>
            <p>
                Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.
            </p>
        </div>
        <div class="container">
            <div class="row mt-30">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-box">
                        <img src="{{ url('public/project') }}/img/agent/thay-nang.jpg" alt="img" />
                        <div class="box-content ">
                            <h3 class="title">Năng Đoàn</h3>
                            <p class="posation">IT Professor</p>
                            <a href="#!" class="btn btn-2 btn-4">CONTACT</a>
                        </div>
                        <ul class="icon d-flex justify-content-start">
                            <li>
                                <a href="https://www.facebook.com/antondoanang/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-box">
                        <img src="{{ url('public/project') }}/img/agent/thay-luong.jpg" alt="img" />
                        <div class="box-content">
                            <h3 class="title">Lương Nguyễn</h3>
                            <p class="posation">IT Professor</p>
                            <a href="#!" class="btn btn-2 btn-4">CONTACT</a>
                        </div>
                        <ul class="icon d-flex justify-content-start">
                            <li>
                                <a href="https://www.facebook.com/itvnsoft"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-box">
                        <img src="{{ url('public/project') }}/img/agent/me.jpg" alt="img" />
                        <div class="box-content">
                            <h3 class="title">Ender Lee</h3>
                            <p class="posation">Web developer</p>
                            <a href="https://www.facebook.com/duclp.dtvt06/" class="btn btn-2 btn-4">HIRE</a>
                        </div>
                        <ul class="icon d-flex justify-content-start">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="home-testimonial-top">
        <div class="content-box">
            <h6 class="color-1">Motion</h6>
            <h2 class="color-2">Watch Our <span> Video Tour</span></h2>
        </div>
    </div>
    <div id="home-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vt-img">
                        <img src="{{ url('public/project') }}/img/common-img/video.png" alt="img" />
                    </div>
                    <div class="video-play-test">
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-play"></i>
                        </button>
                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <iframe width="900" height="500" src="https://www.youtube.com/embed/T5Yu6CGPaqA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="test-slider-home-1 owl-carousel owl-theme">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-sm-12">
                                    <div class="test-monial-item">
                                        <div class="test-heading">
                                            <h6>Lots of Smiles</h6>
                                            <h2>
                                                More Than 960+ People <span>Are Happy With Us.</span>
                                            </h2>
                                        </div>
                                        <div class="test-flex">
                                            <p>
                                                “Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.”
                                            </p>
                                            <h6>Carry Bradshow</h6>
                                            <div class="start-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                                    <div class="qyaty">
                                        <i class="flaticon-quotation"></i>
                                    </div>
                                    <div class="test-moinal-ing-left">
                                        <img src="{{ url('public/project') }}/img/client/client-1.jpg" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="test-monial-item">
                                        <div class="test-heading">
                                            <h6>Lots of Smiles</h6>
                                            <h2>
                                                More Than 960+ People <span>Are Happy With Us.</span>
                                            </h2>
                                        </div>
                                        <div class="test-flex">
                                            <p>
                                                “Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.”
                                            </p>
                                            <h6>Lady Anais Torres</h6>
                                            <div class="start-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                                    <div class="qyaty">
                                        <i class="flaticon-quotation"></i>
                                    </div>
                                    <div class="test-moinal-ing-left">
                                        <img src="{{ url('public/project') }}/img/client/client-2.jpg" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="test-monial-item">
                                        <div class="test-heading">
                                            <h6>Lots of Smiles</h6>
                                            <h2>
                                                More Than 960+ People <span>Are Happy With Us.</span>
                                            </h2>
                                        </div>
                                        <div class="test-flex">
                                            <p>
                                                “Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.”
                                            </p>
                                            <h6>Helen Park (Lena)</h6>
                                            <div class="start-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                                    <div class="qyaty">
                                        <i class="flaticon-quotation"></i>
                                    </div>
                                    <div class="test-moinal-ing-left">
                                        <img src="{{ url('public/project') }}/img/client/client-3.jpg" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="home-contact">
        <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"
                width="600" height="450" allowfullscreen=""></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="contact-cover">
                        <div class="contact-heading">
                            <h2>Do You Have Any Questions?</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula volutpat porta. Cras in vulputate est
                            </p>
                        </div>
                        <div class="info-office">
                            <div class="phone-deta">
                                <div class="phone-info">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="sams">
                                    <p>+124 (2486) 444</p>
                                    <p>+133 (4444) 878</p>
                                </div>
                            </div>
                            <div class="email-deta">
                                <div class="phone-info">
                                    <i class="flaticon-paper-plane"></i>
                                </div>
                                <div class="sams">
                                    <p>mail@example.com</p>
                                    <p>info@mail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="#" id="ctc-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="_name" placeholder="Your Name:" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="_email" placeholder="Your Email:" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group nessage-text">
                                            <textarea name="_cont" id="message" rows="6" class="form-control" placeholder="Enter Your Message:" required></textarea>
                                        </div>
                                        <div class="contact-sub-btn">
                                            <button type="submit" class="btn btn-1">Submit</button>
                                            <!-- <a href="#!" class="btn btn-1 submit contactsuccess">Submit</a> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="success-msg alert alert-success" style="display: none;">
                                <strong>Success!</strong> Email Send Succesfully.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()