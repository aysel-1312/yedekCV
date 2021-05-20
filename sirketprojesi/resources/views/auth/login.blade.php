<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('tema/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('tema/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('tema/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('tema/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href=""><img class="logo-img" src="{{asset('tema/assets/images/aysell.jfif')}}" alt="logo"></a></div>
        <div class="card-body">
            @if(session('status'))
                {{session('status')}}
            @endif
            <form action="{{route('login')}}" method="post" id="loginForm">
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg" id="email" type="email" value="{{old('email')}}"  name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="remember" class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="remember" id="remember" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                <button href="{{route('register')}}" type="button" id="btnLogin" class="btn btn-primary btn-lg btn-block">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="{{asset('tema/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('tema/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>

{{--<script>
    $('#btnLogin').click(function()
    {
        let email=document.querySelector('#email').value;
        let password=document.querySelector('#password').value;

        if(email.trim()=='')
        {
            Swal.fire({
                icon: 'info',
                title: 'UYARI!',
                text: 'E-Posta Adresi Giriniz!',
                confirmButtonText:'Tamam',

            })
        }
        else if(!emailControl(email))
        {
            Swal.fire({
                icon: 'info',
                title: 'UYARI!',
                text: 'Lütfen Geçerli E-Posta Adresi Giriniz!',
                confirmButtonText:'Tamam',

            })
        }
        else if(password.trim()== '')
        {
            Swal.fire({
                icon: 'info',
                title: 'UYARI!',
                text: 'Lütfen Şifrenizi Giriniz!',
                confirmButtonText:'Tamam',

            })
        }
        else
        {
            $('#loginForm').submit();
        }
    });
    function  emailControl(email)
    {
        var regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    <!-- endinject -->
</script>--}}

</body>

</html>
