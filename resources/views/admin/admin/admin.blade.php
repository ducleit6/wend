@extends('layout.admin')
@section('main')
<div class="row" style="margin-bottom:50px">
    <div class="col-1">
        <label for="search">Tìm Kiếm</label>
    </div>
    <div class="col-6">
        <form action="" method="get">
            <div class="row">
                <div class="col-7">
                    <input type="search" name="key" id="search" class="form-control" value="{{request()->key}}" >
                </div>
                <div class="col-4">
                    <select name="order" class="form-control">
                        <option value="" {{request()->order == '' ? 'selected' : ''}} >Default</option>
                        <option value="name-ASC" {{request()->order == 'name-ASC' ? 'selected' : ''}} >A-Z</option>
                        <option value="name-DESC" {{request()->order == 'name-DESC' ? 'selected' : ''}} >Z-A</option>
                    </select>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-3">
        <a href="{{route('create-acc')}}"><button type="button" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</button></a>
    </div>
</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Avatar</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach($acc as $acc) 
        <tr>
            <td>
            @if($acc->image) 
                <img src="{{url('public/upload')}}/{{$acc->image}}" alt="" width="100px">
            @else 
                <i>Null</i>
            @endif
            </td>
            <td>{{$acc->name}}</td>
            <td>{{$acc->email}}</td>
            <td>{{$acc->phone}}</td>
            <td>{{$acc->password}}</td>
            <td>{{$acc->status}}</td>
            <td>
            <form action="{{route('delete_acc', $acc->id)}}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{route('edit-acc', $acc->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    <button onclick="return confirm('Are you sure delete this account?')"
                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@stop()