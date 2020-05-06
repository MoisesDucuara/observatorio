@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="col-md-8">
                <div class="card-header">{{ __('Verifique su correo electrónico') }}</div>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se le ha enviado un enlace de verificación a su correo electrónico') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor confirme si tiene un enlace de verificación en su correo electrónico') }}
                    {{ __('Si no ha recibido el correo electrónico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Presione click aquí para solicitar uno nuevo') }}</button>.
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
