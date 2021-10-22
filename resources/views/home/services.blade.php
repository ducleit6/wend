@extends('layout.master')
@section('title','Services')
@section('main')
<div id="service-main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text  text-center" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Service</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index.html">Home</a>
                                <span>/</span>
                                <a href="#!">Service</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wer-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="ser-ab-deta">
                        <div class="service-ads-heading">
                            <h2>Every Time We Provide <span>Best Service</span></h2>
                        </div>
                        <div class="services-pata">
                            <p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus. Nullam ex elit, vestibulum ut urna non, tincidunt condimentum
                                sem. Sed enim tortor, accumsan.Nullam ex elit, vestibulum ut urna non, tincidunt </p>
                            <p>condimentum sem. Sed enim tortor, accumsan. Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor, accumsan.Nullam ex elit, vestibulum ut urna non, tincidunt condimentum .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="service-deta-ovjet ersd-2 wow fadeIn" data-wow-duration="1.5s">
                                <div class="weject-on">
                                    <img src="{{ url('public/project') }}/img/service/1.png" alt="img">
                                    <h6>Advice & Support</h6>
                                    <p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
                                </div>
                                <div class="weject-on ers wow fadeIn" data-wow-duration="2s">
                                    <img src="{{ url('public/project') }}/img/service/2.png" alt="img">
                                    <h6>Hotel Accomodations</h6>
                                    <p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="service-deta-ovjet ers-2 wow fadeIn" data-wow-duration="3s">
                                <div class="weject-on">
                                    <img src="{{ url('public/project') }}/img/service/3.png" alt="img">
                                    <h6>Advice & Support</h6>
                                    <p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
                                </div>
                                <div class="weject-on ers  wow fadeIn" data-wow-duration="1s">
                                    <img src="{{ url('public/project') }}/img/service/4.png" alt="img">
                                    <h6>Hotel Accomodations</h6>
                                    <p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
                                </div>
                            </div>
                        </div>
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
    <div id="home-testmoinal">
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
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <iframe width="900" height="500" src="https://www.youtube.com/embed/T5Yu6CGPaqA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
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
    <div id="img-nature">
        <div class="container-fluid">
            <div class="img-nature-slider owl-carousel owl-theme">
                <div class="nuture-img-item">
                    <a href="#"><img src="img/about/n-1.png" alt=""></a>
                    <div class="overay-nutre">
                        <a href="{{ url('public/project') }}/img/about/n-1.png"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <div class="nuture-img-item">
                    <a href="#"><img src="img/about/n-2.png" alt=""></a>
                    <div class="overay-nutre">
                        <a href="{{ url('public/project') }}/img/about/n-2.png"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <div class="nuture-img-item">
                    <a href="#"><img src="img/about/n-3.png" alt=""></a>
                    <div class="overay-nutre">
                        <a href="{{ url('public/project') }}/img/about/n-3.png"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <div class="nuture-img-item">
                    <a href="#"><img src="img/about/n-4.png" alt=""></a>
                    <div class="overay-nutre">
                        <a href="{{ url('public/project') }}/img/about/n-4.png"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <div class="nuture-img-item">
                    <a href="#"><img src="img/about/n-5.png" alt=""></a>
                    <div class="overay-nutre">
                        <a href="{{ url('public/project') }}/img/about/n-5.png"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()