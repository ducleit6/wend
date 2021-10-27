@extends('layout.admin')
@section('main')
<div class="container">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Thêm Quản Trị</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('update-acc',$acc->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                          <label for="name">Tên</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên ..." value="{{old('name') ? old('name') : $acc ->name }}">
                          @error('name')
                            <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email ..." value="{{old('email') ? old('email') : $acc ->email }}">
                          @error('email')
                            <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                          @enderror
                        </div>        
                        <div class="form-group">
                          <label for="sđt">SĐT</label>
                          <input type="text" class="form-control" name="phone" id="sđt" placeholder="Nhập số điện thoại ..." value="{{old('phone') ? old('phone') : $acc ->phone }}">
                          @error('phone')
                            <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                          @enderror
                        </div>                
                         <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Nhập pass ..." value="{{old('password') ? old('password') : 123456}}">
                          @error('password')
                            <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="avt">Avatar</label>
                          <input type="file" class="form-control" id="select_file" name="image" id="avt">
                          @error('image')
                            <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
                          @enderror
                        </div> 
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a href="{{route('admin')}}"><button type="button" class="btn btn-default">Quay Lại</button></a>
                      </div> 
                  </form>
                </div>
</div>

@stop()


