@extends('frontend_web.master.master')
@section('main_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/Login/css/main.css')}}">
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
               
                
                <form class="login100-form validate-form"  method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('dnhapthatbai'))
                    <div class="alert alert-danger">{{Session::get('dnhapthatbai')}}</div>
                @endif
                    <span class="login100-form-title p-b-26" style="font-family:serif;font-weight:bold;font-size:40px;">
                        Đăng nhập
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Vui lòng điền tên đăng nhập của bạn">
                        <input class="input100" type="text" name="tendangnhap">
                        <span class="focus-input100" data-placeholder="Tên đăng nhập"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Vui lòng nhập mật khẩu">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="matkhau">
                        <span class="focus-input100" data-placeholder="Mật khẩu"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>

                        </div>
                    </div>

                    <div class="text-center p-t-115" style="padding-top:45px;">
                        <span class="txt1" style="font-size:16px;">
                            Bạn chưa có tài khoản?
                        </span>

                        <a class="txt2"  style="font-size:16px;color:dodgerblue;font-weight:bold;">
                            Đăng kí
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>


    <script src="{{asset('web/Login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('web/Login/vendor/animsition/js/animsition.min.js')}}"></script>
    <script src="{{asset('web/Login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('web/Login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/Login/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('web/Login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('web/Login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('web/Login/vendor/countdowntime/countdowntime.js')}}"></script>
    <script src="{{asset('web/Login/js/main.js')}}"></script>

</body>
</html>
@endsection