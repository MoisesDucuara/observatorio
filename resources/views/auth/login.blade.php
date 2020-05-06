@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="col-md-9">
            <br>
            <form method="POST" action="{{ route('login') }}">

                <div class="form-group">
                    <div class="col-md-9">
                        <h1 style="color:#006ec7">Iniciar sesión</h1>
                        <label for="email" style="color:#004075" class="text-md-left">{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 form-group col-form-label">
                    <div class="text-md-center">
                        <button type="submit" class="btn btn-outline-primary">
                            {{ __('Iniciar sesión') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Olvidó su contraseña?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
