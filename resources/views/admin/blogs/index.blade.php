@extends('layout.admin')

@section('title','Quản lý đơn hàng')
@section('css')
<style>
    svg {
        display: none;
    }
    p.leading-5{
        display: none;
    }
</style>
@stop()
@section('main')
    <form action="" method="get" class="form-inline" role="form">
        <div class="form-group">
            <input type="text" class="form-control" name="key" placeholder="Tìm kiếm tên...">
        </div>
        <div class="input-group-prepend ml-3 mr-3">
            <select class="form-control" name="order" >
                <option value="">Mặc Định</option>
                @foreach($options as $key => $value)
                <option value="{{$key}}" {{request()->order == $key ? 'selected': '';}}>{{$value}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
        <a href="{{route('services.create')}}" class="btn btn-warning ml-2"><i class="fas fa-plus"></i> Thêm mới</a>
    </form>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Người Đăng</th>
                    <th>Tên Bài Đăng</th>
                    <th>Nội Dung Bài đăng</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $datas)
                <tr>
                    <td>{{$datas->id}}</td>
                    <td>{{$datas->user->name}}</td>
                    <td>{{$datas->name}}</td>
                    <td>{!!Str::limit($datas->content, 130)!!}</td>
                    <td>{{$datas->status == 2 ? 'Ẩn danh mục': 'Hiện danh mục'}}</td>
                    <td><a href="{{route('blogs.editAdmin', $datas->id)}}" class="btn btn-sm btn-primary">Sửa trạng thái</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center">
    </div>
@stop()