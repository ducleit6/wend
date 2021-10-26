@extends('layout.master')

@section('main')
<div id="tour-packes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text text-center  wow zoomIn" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Tour Packges</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index.html">Home</a>
                                <span>/</span>
                                <a href="#!">Tour Packges</a>
                            </h6>
                        </div>
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
            
        </div>
    </div>
<div class="tour-des">
    <div class="container">
        <div class="row">
            <div class="content-box text-center text">
                <h6>Travel Express Provide</h6>
                <h2>Select your <span>Destination</span></h2>
                <p>
                    Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin.
                    Proin sed augue sed neque ultricies condimentum.
                </p>
            </div>


                <div class="row">

                    @foreach($datas as $data)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="des-cov item">
                            <div class="des-img">
                                <a href="tour-details.html"><img src="{{url('public/uploads').'/'.$data->image}}"
                                        alt="img" /></a>
                            </div>
                            <div class="des-para">
                                <div class="dayt">
                                    <h6>{{$data->destinations->name}} <span>{{$data->date}}day
                                            ${{$data->sale_price?$data->sale_price:$data->price}}</span></h6>
                                </div>
                                <div class="real-dat-para">
                                    <p>
                                        {{$data->description}}
                                    </p>
                                </div>
                                <div class="des-button-icon">
                                    <div class="das-into-btn col-50">
                                        <a href="#" class="btn btn-2" data-toggle="modal"
                                            data-target="#staticBackdrop">Book Now</a>
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
                    @endforeach

                </div>


        </div>
    </div>
</div>

@stop()
@section('js')
<script src="{{ url('public/project') }}/js/packages.js"></script>
@stop