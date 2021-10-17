@extends('layout.master')
@section('css')
<link rel="stylesheet" href="{{ url('public/project') }}/css/login.css">
@stop()
@section('main')

    <div class="login-box">
        <h2>Login</h2>
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
        <form action="{{route('home-check-login')}}" method="POST" role="form" >
        @csrf
            <div class="user-box">
                <input type="text" name="email" value="{{old('email')}}">
                <label>Tài khoản</label>
                @error('email')
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
            <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" style="color:#fff">Remember Me</label>
            </div>
            <a href="{{route('home-forgot')}}" style="font-size:12px;margin-right:100px">Quên mật khẩu?</a>
            <button type="submit"><span></span><span></span><span></span><span></span>Đăng Nhập</button>
            <a href="{{route('home-register')}}"><span></span><span></span><span></span><span></span>Back</a>
        </form>
    </div>
@stop()