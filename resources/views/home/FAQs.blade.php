@extends('layout.master')
@section('title','FAQ')
@section('main')
    <div id="faq-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text  text-center" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>FAQs</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index.html">Home</a>
                                <span>/</span>
                                <a href="#!">FAQs</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="faqws-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-faq-cover">
                        <div class="acrond-heading">
                            <h6>Payment</h6>
                        </div>
                        <div id="accordion">
                            @foreach($data as $datas)
                            @if($datas->catfaqs_id == 2 && $datas->status == 1)
                            <div class="card wow fadeIn" data-wow-duration="1s">
                                <div class="card-header" id="heading-{{$datas->id}}">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-{{$datas->id}}" aria-expanded="false" aria-controls="collapse-{{$datas->id}}">
                                            {{$datas->name}}
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-{{$datas->id}}" class="collapse" data-parent="#accordion" aria-labelledby="heading-{{$datas->id}}">
                                    <div class="card-body">
                                        <p>{{$datas->content}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <div class="acrond-heading mar-faq">
                                <h6>Preparation</h6>
                            </div>
                            @foreach($data as $datas)
                            @if($datas->catfaqs_id == 3 && $datas->status == 1)
                            <div class="card wow fadeIn" data-wow-duration="1s">
                                <div class="card-header" id="heading-{{$datas->id}}">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-{{$datas->id}}" aria-expanded="false" aria-controls="collapse-{{$datas->id}}">
                                            {{$datas->name}}
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-{{$datas->id}}" class="collapse" data-parent="#accordion" aria-labelledby="heading-{{$datas->id}}">
                                    <div class="card-body">
                                        <p>{{$datas->content}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <div class="acrond-heading mar-faq">
                                <h6>Reservation</h6>
                            </div>
                            @foreach($data as $datas)
                            @if($datas->catfaqs_id == 4 && $datas->status == 1)
                            <div class="card wow fadeIn" data-wow-duration="1s">
                                <div class="card-header" id="heading-{{$datas->id}}">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-{{$datas->id}}" aria-expanded="false" aria-controls="collapse-{{$datas->id}}">
                                            {{$datas->name}}
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-{{$datas->id}}" class="collapse" data-parent="#accordion" aria-labelledby="heading-{{$datas->id}}">
                                    <div class="card-body">
                                        <p>{{$datas->content}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()