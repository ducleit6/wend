@extends('layout.master')
@section('title','Blogs singer')
@section('main')
<div id="blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text text-center" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Blog</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index.html">Home</a>
                                <span>/</span>
                                <a href="#!">Blog</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="blog-single-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="all-single-cover">
                        <div class="blog-sighn-img  wow fadeIn" data-wow-duration="3s">
                            <a href="#!"><img src="{{ url('public/upload') }}/{{$data->image}}" alt="img"></a>
                        </div>
                        <div class="authour-single">
                            <div class="al-img-at1">
                                <p>By:<a href="#!">{{$data->user->name}}</a></p>
                            </div>
                            <div class="al-img-at2">
                                <a href="#!"><i class="fas fa-calendar-alt"></i></a>
                                <p><a href="#!">{{$data->created_at}}</a></p>
                            </div>
                        </div>
                        <div class="blog-single-dd-hed">
                            <h4><a href="#">{{$data->name}}</a></h4>
                            <p>{!!$data->content!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="left-blog-tree">
                        <div class="alo-search">
                            <div class="form-group d-flex">
                                <input type="text" placeholder="Search" class="form-control">
                                <button class="btn search-icon-blog"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="coomm-seclitor">
                            <div class="blog-hki-hed">
                                <h5>Categories</h5>
                            </div>
                            <div class="all-boytr">
                                <div class="item-cata">
                                    <div class="icon-catr">
                                        <a href="#"><i class="far fa-dot-circle"></i>Adventures</a>
                                    </div>
                                    <div class="co-num">
                                        <a href="#">15</a>
                                    </div>
                                </div>
                                <div class="item-cata">
                                    <div class="icon-catr">
                                        <a href="#"><i class="far fa-dot-circle"></i>Tour Guide</a>
                                    </div>
                                    <div class="co-num">
                                        <a href="#">10</a>
                                    </div>
                                </div>
                                <div class="item-cata">
                                    <div class="icon-catr">
                                        <a href="#"><i class="far fa-dot-circle"></i>Travelling</a>
                                    </div>
                                    <div class="co-num">
                                        <a href="#">21</a>
                                    </div>
                                </div>
                                <div class="item-cata">
                                    <div class="icon-catr">
                                        <a href="#"><i class="far fa-dot-circle"></i>Holidays</a>
                                    </div>
                                    <div class="co-num">
                                        <a href="#">74</a>
                                    </div>
                                </div>
                                <div class="item-cata">
                                    <div class="icon-catr">
                                        <a href="#"><i class="far fa-dot-circle"></i> Photography</a>
                                    </div>
                                    <div class="co-num">
                                        <a href="#">38</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="coomm-seclitor">
                            <div class="blog-hki-hed">
                                <h5>Recent Posts</h5>
                            </div>
                            <div class="catago-item">
                                <a href="#!">Agency</a>
                                <a href="#!">Travelling</a>
                                <a href="#!">Tour</a>
                            </div>
                            <div class="catago-item">
                                <a href="#!">Beach</a>
                                <a href="#!">Adventures</a>
                                <a href="#!">Hotel</a>
                            </div>
                            <div class="catago-item">
                                <a href="#!">Summer</a>
                                <a href="#!">Photography</a>
                                <a href="#!">Guide</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()