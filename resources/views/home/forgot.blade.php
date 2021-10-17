@extends('layout.master')
@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
        <form action="{{route('post-forgot')}}" method="POST" role="form" style="margin:20px 0">
            @csrf
            <legend>Mời nhập email </legend>
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
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email ..." value="{{old('email')}}">
            </div>
            @error('email')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
             @enderror
            <div class="row">
                <div class="col-6"><button type="submit" class="btn btn-primary">Submit</button></div>
                <div class="col-6"><button type="button" class="btn btn-success"><a href="{{route('home-login')}}">Back</a></button></div>
            </div>
        </form>
        </div>
    </div>
</div>



@stop()