@extends('layout.admin')

@section('title','Dịch vụ')

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
<table class="table table-hover">
    <thead>
        <tr>
            <th>Stt</th>
            <th>Tên</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $services)
            <tr>
                <td>{{$services->id}}</td>
                <td>{{$services->name}}</td>
                <td>{{$services->status  == 2 ? 'Ẩn danh mục': 'Hiện danh mục'}}</td>
                <td>
                    <form action="{{route('services.delete', $services->id)}}" method="post">
                        @csrf @method('delete')
                        <a href="{{route('services.edit', $services->id)}}" class="btn btn-sm btn-primary">Sửa</a>
                        <button onclick="return confirm('Bạn có chắc không?')" type="submit" class="btn  btn-sm btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="text-center">
    <!-- {{$data->appends(request()->all())->links()}} -->
</div>
@stop()