@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="col-md-8">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <br>
            <form method="POST" action="{{ route('password.email') }}">

                <div class="form-group">
                    <div class="col-md-9">
                        <h1 style="color:#006ec7" class="h1 mb-3 font-weight-normal text-md-left">Recuperar contraseña</h1>
                        <label for="email" style="color:#004075" class="text-md-left">{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-9 form-group col-form-label">
                    <div class="text-md-center">
                        <button type="submit" class="btn btn-outline-primary">
                            {{ __('Solicitar enlace para recuperar contraseña') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
