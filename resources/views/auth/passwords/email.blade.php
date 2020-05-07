<!DOCTYPE html>
<html>
<head>
    <title>Forget</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/697c5a6e09.js" crossorigin="anonymous"></script>

    <style>

        .image-container2{
            background: url('../image/img2.jpg') no-repeat center;
            background-size: cover;
            height: 100vh;
        }

        .form-container{
            background-color: white;
            display: flex;
            justify-content: center;
        }

        .form-box{
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
        }

        .form-box h1{
            font-weight: bold;
            color: #006EC7;
        }

        .form-box .form-input {
            position: relative;
        }

        .form-box .form-input input{
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            border: 1px solid gray;
            border-radius: 20px;
            outline: none;
            background: white;
            padding-left: 45px;
            box-shadow: 2px 2px 5px gray;
        }

        .form-box .form-input span{
            position: absolute;
            top: 8px;
            padding-left: 20px;
            color: #006EC7;
        }

        .form-box .form-input input::placeholder{
            padding-left: 0px;
        }

        .form-box .form-input input:focus,
        .form-box .form-input input:valid{
            border-bottom: 2px solid #006EC7;
        }

        .form-box input[type="checkbox"]:not(:checked) + label:before{
            background: transparent;
            border: 2px solid #fff;
            width: 15px;
            height: 15px;
        }

        .form-box .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before{
            background-color: #dc3545;
            border: 0px;
        }

        .form-box button[type="submit"]{
            border: 1px solid #006EC7;
            cursor: pointer;
            width: 150px;
            height: 40px;
            border-radius: 20px;
            background-color: #fff;
            color: #006EC7;
            font-weight: bold;
            transition: 0.5s;
        }

        .form-box button[type="submit"]:hover{
            box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
            color: white;
            background-color: #006EC7;
        }

        .forget-link, .register-link, .login-link{
            color: #57A6F1;
            font-weight: bold;
        }

        .forget-link:hover, .register-link:hover, .login-link:hover{
            color: #006EC7;
        }
    </style>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 form-container">
            <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box">
                <div class="reset-form d-block">

                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="mb-3">Recuperar Contraseña</h1>
                    <p class="mb-3" style="color: #57a6f1;">
                        Digite la información requerida para solicitar la recuperación de su contraseña
                    </p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input id="email" type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            <div class="text-left">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            <button type="submit" class="btn">Solicitar</button>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('login') }}" class="forget-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 d-none d-md-block image-container2"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script
</body>
</html>


