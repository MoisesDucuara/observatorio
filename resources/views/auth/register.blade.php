@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="col-md-9">
            <br>
            <form method="POST" action="{{ route('register') }}">

                <div class="form-group">
                    <div class="col-md-9">
                        <h1 style="color:#006ec7">Registro</h1>
                        <label for="dni" style="color:#004075" class="text-md-left">{{ __('Documento de identidad') }}</label>
                        <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required>

                        @error('dni')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9">
                        <label for="name" style="color:#004075" class="text-md-left">{{ __('Nombre completo') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9">
                        <label for="email" style="color:#004075" class="text-md-left">{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9">
                        <label for="password" style="color:#004075" class="text-md-left">{{ __('Contraseña') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9">
                        <label for="password-confirm" style="color:#004075" class="text-md-left">{{ __('Confirmar contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="col-md-9 form-group col-form-label">
                    <div class="text-md-center">
                        <button type="submit" class="btn btn-outline-primary">
                            {{ __('Enviar registro') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
