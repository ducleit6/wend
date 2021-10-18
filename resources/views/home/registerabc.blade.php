@extends('layout.master')
@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
        <form action="{{route('home-add-register')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <legend>Form Register</legend>
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
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Tên ..." value="{{old('name')}}">
            </div>
            @error('name')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
            @enderror
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email ..." value="{{old('email')}}">
            </div>
            @error('email')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
            @enderror
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone ..." value="{{old('phone')}}">
            </div>
            @error('phone')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
            @enderror
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address ..." value="{{old('address')}}">
            </div>
            @error('address')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
            @enderror
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password ..." value="{{old('password')}}">
            </div>
            @error('password')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
            @enderror
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password ..." value="{{old('confirm_password')}}">
            </div>
            @error('confirm_password')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
            @enderror
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
                <option value="2">Khác</option>
            </select>
            <div class="form-group">
                <label for="avt">Avatar</label>
                <input type="file" class="form-control" id="select_file" name="image" id="avt">
                @error('image')
                    <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                @enderror
            </div> 
             <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6"><button type="submit" class="btn btn-primary">Submit</button></div>
                <div class="col-6"><button type="button" class="btn btn-success"><a href="{{route('home-login')}}">Login</a></button></div>
            </div>
        </form>
        </div>
    </div>
</div>



@stop()