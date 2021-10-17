@extends('layout.admin')

@section('title','Sửa dịch vụ')

@section('main')
<div class="card">
        <div class="card-body">
            <form action="{{route('blogs.updateAdmin', $acc->id)}}" class="form-horizontal" method="POST">
                @csrf @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tên Người Đăng</label>
                            <div class="col-sm-9 text-center">
                                <h4>{{$acc->user->name}}</h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tên Bài Đăng</label>
                            <div class="col-sm-9 text-center">
                                <h6>{{$acc->name}}</h6>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nội Dung Bài Đăng</label>
                            <div class="col-sm-9">
                                <p>{!!Str::limit($acc->content, 130)!!}</p>
                            </div>
                        </div>
                        <div class="form-group row ml-3">
                            <label class="form-check-label mr-5">
                                <input type="hidden" name="user_id" class="form-control" value="{{$acc->id}}">
                                <input type="hidden" class="form-control" name="name" value="{{$acc->name}}">
                                <input type="hidden" class="form-control" name="content" value="{{$acc->content}}">
                                <input type="hidden" name="image" class="form-control" value="{{$acc->image}}">
                                <input type="radio" class="form-check-input" name="status" value="2" {{$acc->status == 2 ? 'checked': ''}}>
                                Ẩn Bài Đăng
                            </label>
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" value="1" {{$acc->status == 1 ? 'checked': ''}}>
                                Hiện Bài Đăng
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-info"><i
            class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger"><i
                class="fas fa-remove"></i> Refresh</button>
            </div>
            <!-- /.card-footer -->
            <!-- /.card-footer -->
        </form>
    </div>
@stop()