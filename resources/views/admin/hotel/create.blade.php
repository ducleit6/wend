@extends('layout/admin')
@section('title','Thêm Mới Khách sạn')
@section('main')
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <form method="POST" class="form-horizontal" action="{{route('hotel.store')}}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body mb-2">
                    <div class="form-group row">
                        <label for="desname" class="col-sm-3 col-form-label">Tên Khách sạn</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="desname" name="name" placeholder="Nhập ..."
                                value="{{old('name')}}">
                            @error('name') <small style="color:red;"><i>{{$message}}</i> </small>@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="categoryname" class="col-sm-3 col-form-label">Danh mục</label>
                        <div class="col-sm-9">
                            <select name="destination_id" id="catid" class="form-control mt-1" style="margin-top:-9px">
                                <option value="">Chọn Điểm đến</option>
                                @foreach($destinations as $des)
                                <option value="{{$des->id}}">{{$des->name}}</option>
                                @endforeach
                            </select>
                            @error('destination_id') <small style="color:red;"><i>{{$message}}</i> </small>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-3 col-form-label">Trạng thái</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline w-100">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="status" id="" value="1" checked>
                                    Hiển Thị
                                </label>
                            </div>
                            <div class="form-check form-check-inline w-100">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="status" id="" value="0">
                                    Tạm Ẩn
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desname" class=" form-label">Mô tả Khách sạn</label>
                        <textarea name="description" id="procontent" rows="5"
                                  class="form-control content-editor">{{old('description')}}</textarea>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-info"><i class="fas fa-save"></i></button>
                    <a href="{{route('hotel.index')}}" class="btn btn-danger "><i
                            class="fas fa-arrow-left"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop()
@section('css')
<link rel="stylesheet" href="{{url('public/admin')}}/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{url('public/admin')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet"
    href="{{url('public/admin')}}/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css">
@stop()
@section('js')
<script src="{{url('public/admin')}}/plugins/select2/js/select2.full.min.js"></script>
<script src="{{url('public/admin')}}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script>
    $('.content-editor').summernote({
        height: 300
    });
$('.select2').select2();
</script>
@stop()
