@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="col-md-8">
            <br>
            <form method="POST" action="{{ route('password.confirm') }}">

                <div class="form-group">
                    <div class="col-md-8">
                        <h6 style="color:#004075">Por favor, confirme su contraseña ants de continuar</h6>
                        <label for="password" style="color:#004075" class="text-md-left">{{ __('Contraseña) }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-8 form-group col-form-label">
                    <div class="text-md-center">
                        <button type="submit" class="btn btn-outline-primary">
                            {{ __('Confirmar contraseña') }}
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
