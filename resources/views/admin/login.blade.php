
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('public/admin/assets') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ url('public/admin/assets') }}/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/admin/assets') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
        <a href="#" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
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
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{route('check-login')}}" method="post">
        @csrf
            <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
             @enderror
            <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            @error('password')
                <h6 style="color:red;font-style:Italic;text-decoration:underline">{{$message}}</h6>
            @enderror
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
            <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="#">I forgot my password</a>
        </p>
        <p class="mb-0">
            <a href="{{route('register')}}" class="text-center">Register a new membership</a>
        </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
