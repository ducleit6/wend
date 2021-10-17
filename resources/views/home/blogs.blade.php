@extends('layout.master')
@section('title','Blogs')
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
    <div id="blog-content">
        <div class="container">
            <div class="row">
                @foreach($data as $datas)
                @if($datas->status == 1)
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="1s">
                    <div class="blog-items clas-mar">
                        <div class="blog-item-img">
                            <a href="{{route('blogs.singer', $datas)}}"><img src="{{ url('public/upload') }}/{{$datas->image}}" alt="img" /></a>
                        </div>
                        <div class="dtes-not">
                            <div class="blog-item-det">
                                <h6>
                                    <a href="{{route('blogs.singer', $datas)}}">{{$datas->name}}</a>
                                </h6>
                            </div>
                            <div class="blog-author">
                                <div class="blog-flex-same">
                                    <div class="blog-athou-img">
                                        <p>By:<a href="{{route('blogs.singer', $datas)}}">{{$datas->user->name}}</a></p>
                                    </div>
                                    <div class="blog-times">
                                        <i class="far fa-clock"></i>
                                        <p><a href="{{route('blogs.singer', $datas)}}">{{$datas->created_at}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="alert alert-danger">
                    <strong>hiện không có bài đăng nào!</strong> 
                    <a class="btn btn-sm btn-danger" href="route('home')" role="button">Trở lại trang chủ</a>
                </div>
                @endif
                @endforeach
            </div>
            <!-- pagination start -->
            <div class="blog-pagination d-flex justify-content-center text-center">
                <div class="wrapper blog-wrapper">
                    <p id="pagination-here"></p>
                </div>
            </div>
            <!-- pagination end -->
        </div>
    </div>
@stop()