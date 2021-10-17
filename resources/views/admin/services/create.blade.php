@extends('layout.admin')

@section('title','Thêm mới dịch vụ')

@section('main')
<div class="card">
        <div class="card-body">
            <form action="{{route('services.store')}}" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6
                        col-lg-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tên Dịch Vụ</label>
                            <div class="col-sm-9">
                                <input class="form-control"  name="name" placeholder="Tên Dịch Vụ...." value="{{old('name')}}">
                                @error('name')<small>{!!$message!!}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group row ml-3">
                            <label class="form-check-label mr-5">
                                <input type="radio" class="form-check-input"name="status" value="2">
                                Ẩn Dịch Vụ
                            </label>
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" value="1"  checked>
                                Hiện Dịch Vụ
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