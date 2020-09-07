<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--======================================={{asset('admin/assets/vendor/jquery/jquery.min.js')}}========================================================-->
    <link rel="icon" type="image/png" href="{{asset('halamanLogin/images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('halamanLogin/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(halamanLogin/images/bg-02.jpg);">
                    <span class="login100-form-title-1">
                        Login Admin Farmdroid
                    </span>
                </div>

                <form class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Input username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="Input password">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{asset('halamanLogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('halamanLogin/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('halamanLogin/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('halamanLogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('halamanLogin/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('halamanLogin/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('halamanLogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('halamanLogin/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('halamanLogin/js/main.js')}}"></script>

</body>

</html>