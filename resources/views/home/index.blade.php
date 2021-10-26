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
                                                @foreach($destination as $des)
                                                
                                                <option value="{{$des->id}}">{{$des->name}}</option>
                                                @endforeach
                                               
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
                                                @foreach($destination as $des)
                                                
                                                <option value="{{$des->id}}">{{$des->name}}</option>
                                                @endforeach
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
                        <div class="item"><img src="{{url('public/project')}}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{url('public/project')}}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{url('public/project')}}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{url('public/project')}}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{url('public/project')}}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{url('public/project')}}/img/common-img/about-img.png" alt=""></div>
                        <div class="item"><img src="{{url('public/project')}}/img/common-img/about-img.png" alt=""></div>
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
                        <img src="{{url('public/project')}}/img/common-img/amagin.png" alt="">
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
                        <img src="{{url('public/project')}}/img/common-img/roted.png" alt="img">
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
                    @foreach($datas as $data)
                    <div class="des-cov item">
                        <div class="des-img">
                            <a href="tour-details.html"><img src="{{url('public/uploads').'/'.$data->image}}" alt="img" /></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6>{{$data->destinations->name}} <span>{{$data->date}}day  ${{$data->sale_price?$data->sale_price:$data->price}}</span></h6>
                            </div>
                            <div class="real-dat-para">
                                <p>
                                   {{$data->description}}
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
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
   
@stop()