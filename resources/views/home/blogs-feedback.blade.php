@extends('layout.master')
@section('title','Blogs-create')
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
        <form action="{{route('blogs.store')}}" enctype="multipart/form-data" class="form-horizontal" method="POST">
        @csrf
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label style="color: black;">Tên Bài Đăng</label>
                        <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Tên Bài Đăng...">
                        @error('name')
                        <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label style="color: black;">Nội Dung Bài Đăng</label>
                        <textarea name="content" class="form-control" rows="9">{{old('content')}}</textarea>
                        @error('content')
                        <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group ml-3">
                        <span class="btn btn-success col fileinput-button dz-clickable">
                            <i class="fas fa-plus"></i>
                            <span>Chọn ảnh bài đăng</span>
                        </span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-nOAglpmejsvQmil3kr19lwURHplsMvhv5A&usqp=CAU" style="width:100%;" id="show_img" alt="Image">
                        <input type="file" name="image" value="{{old('image')}}" id="selected_file" style="display:none">
                        @error('image')
                        <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">lưu lại</button>
            </div>
        </form>
        </div>
    </div>
@stop()
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop()
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $( ".fileinput-button" ).click(function() {
        $('#selected_file').click();
    });

    $('#selected_file').change(function() {
        var file = $(this)[0].files[0];
        var reader = new FileReader();
        reader.onload = function(ev){
            $('img#show_img').attr('src', ev.target.result);
        }
        reader.readAsDataURL(file);
    });
</script>
@stop()