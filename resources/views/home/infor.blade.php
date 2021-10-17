@extends('layout.master')
@section('main')

<div class="container" style="background:gray">
    <div class="row justify-content-center">
        <div class="col-3">
            <h3 style="padding:20px 0;color:#fff"><i><b>Your Information</b></i></h3>
            <img src="{{url('public/upload')}}/{{$user->image}}" alt="" width="100%">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{route('postupdate-user',$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                    <input type="text" class="form-control" name="name" id="name" placeholder="Tên ..." value="{{$user->name}}">
                </div>
                @error('name')
                    <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                @enderror
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email ..." value="{{$user->email}}">
                </div>
                @error('email')
                    <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                @enderror
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone ..." value="{{$user->phone}}">
                </div>
                @error('phone')
                    <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                @enderror
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address ..." value="{{$user->address}}">
                </div>
                @error('address')
                    <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                @enderror
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password ..." value="{{$user->password}}">
                </div>
                @error('password')
                    <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                @enderror
                <label for="gender" style="color:#fff">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    @if($user->gender == 0)
                        <option value="0" checked>Nam</option>
                        <option value="1">Nữ</option>
                        <option value="2">Khác</option>
                    @elseif($user->gender == 1)
                        <option value="0" >Nam</option>
                        <option value="1" checked>Nữ</option>
                        <option value="2">Khác</option>
                    @else
                        <option value="0" >Nam</option>
                        <option value="1">Nữ</option>
                        <option value="2" checked>Khác</option>
                    @endif
                </select>
                <div class="form-group">
                    <label for="avt">Thay mới Avatar</label>
                    <input type="file" class="form-control" id="select_file" name="image" id="avt">
                </div> 
                <div class="row">
                    <div class="col-6"><button type="submit" class="btn btn-primary">Lưu</button></div>
                    <div class="col-6"><button type="button" class="btn btn-success"><a href="{{route('home')}}">Quay Lại</a></button></div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop()