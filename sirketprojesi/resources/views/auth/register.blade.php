<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
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
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->


<form action="{{route('register')}}" class="splash-container" method="post" >
    @csrf
    <div class="card">
        <div class="card-header" >
            <h3 class="mb-1">Registrations Form</h3>

        </div>
        <div class="card-body">
            <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="name" required="" value="{{old('name')}}"  placeholder="Name" >
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="surname" required="" value="{{old('surname')}}"  placeholder="Surname" >
                @error('surname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" type="email" name="email" required="" value="{{old('email')}}"  placeholder="E-mail">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" name="password" id="pass1" type="password" required="" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" type="password" name="password_confirmation "required="" placeholder="Password Confirm">
            </div>
            <div class="form-group pt-2">
                <button class="btn btn-block btn-primary" type="submit">Register</button>
            </div>
        </div>
    </div>
</form>
</body>

</html>
