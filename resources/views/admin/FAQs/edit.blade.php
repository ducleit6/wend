@extends('layout.admin')

@section('title','Sửa câu hỏi')

@section('main')
<div class="card">
        <div class="card-body">
            <form action="{{route('FAQs.update', $FAQs->id)}}" class="form-horizontal" method="POST">
                @csrf @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6
                        col-lg-6">
                        <div class="form-gruop">
                            <label for="">Danh mục</label>
                            <select class="form-control select2" name="catfaqs_id" >
                                <option selected="selected">Danh mục</option>
                                @foreach($cats as $cat)
                                <?php
                                if (old('catfaqs_id')) {
                                    $selected = old('catfaqs_id') == $cat->id ? 'selected': '';
                                } else {
                                    $selected = $FAQs->catfaqs_id == $cat->id ? 'selected': '';
                                }
                                ?>
                                <option value="{{$cat->id}}" {{$selected}}>{{$cat->name}}</option>
                                @endforeach
                            </select>
                            @error('catfaqs_id')<small>{!!$message!!}</small>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Câu hỏi</label>
                            <textarea name="name" placeholder="Câu hỏi...." class="form-control desc" rows="2">{{$FAQs->name}}</textarea>
                            @error('name')<small>{!!$message!!}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung</label>
                            <textarea name="content" class="form-control desc" rows="3">{{$FAQs->content}}</textarea>
                            @error('content')<small>{!!$message!!}</small>@enderror
                        </div>
                        <div class="form-group row ml-3">
                            <label class="form-check-label mr-5">
                                <input type="radio" class="form-check-input"name="status" value="2" {{$FAQs->status == 2 ? 'checked': ''}}>
                                Ẩn Câu Hỏi
                            </label>
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" value="1"  {{$FAQs->status == 1 ? 'checked': ''}}>
                                Hiện Câu Hỏi
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