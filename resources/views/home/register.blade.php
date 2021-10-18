@extends('layout.nobody')
@section('css')
<link rel="stylesheet" href="{{url('resources/views/home/assets')}}/css/loginn.css">
@stop()
@section('table')

    <div class="login-box">
        <h2>Đăng ký</h2>
            @if(Session::has('no'))        
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Oh!</strong> {{Session::get('no')}}
                </div> 
            @endif
            @if(Session::has('yes'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Hi!</strong> {{Session::get('yes')}}
                </div>
            @endif
        <form action="{{route('home-add-register')}}" method="POST" role="form" >
        @csrf
            <div class="user-box">
                <input type="text" name="name" value="{{old('name')}}">
                <label>Tên</label>
                @error('name')
                <h6>{{$message}}</h6>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="email" value="{{old('email')}}">
                <label>Email</label>
                @error('email')
                <h6>{{$message}}</h6>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="phone" value="{{old('phone')}}">
                <label>Số điện thoại</label>
                @error('phone')
                <h6>{{$message}}</h6>
                @enderror
            </div><div class="user-box">
                <input type="text" name="address" value="{{old('address')}}">
                <label>Địa chỉ</label>
                @error('address')
                <h6>{{$message}}</h6>
                @enderror
            </div>
            <div class="user-box">
                <input type="password" name="password" value="{{old('password')}}">
                <label>Mật khẩu</label>
                @error('password')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                @enderror
            </div>
            <div class="user-box">
                <input type="password" name="confirm_password" value="{{old('confirm_password')}}">
                <label>Xác nhận mật khẩu</label>
                @error('confirm_password')
                <h6>{{$message}}</h6>
                @enderror
            </div>
            <div class="form-radio">
                <label>Giới tính</label>
                <input type="radio" name="gender" checked>Nam
                <input type="radio" name="gender">Nữ
                <input type="radio" name="gender">Khác
            </div>
            <div class="user-box">
                <input type="file" name="image" value="{{old('image')}}">
                <label>Ảnh đại diện</label>
                @error('image')
                <h6>{{$message}}</h6>
                @enderror
            </div>
            <button type="submit" class="button-submit-register"><span></span><span></span><span></span><span></span>Đăng Ký</button>
            <a href="{{route('home-register')}}"><span></span><span></span><span></span><span></span>Quay lại</a>
        </form>
    </div>
@stop()