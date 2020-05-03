@extends('layouts.master')

@section('title')
    Observatorio UTP
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Registro</h3>
            <form action="{{ route('registro') }}" method="post">
                <div class="form-group">
                    <label for="EgresadoDNI">DNI</label>
                    <input class="form-control" type="number" name="EgresadoDNI" id="EgresadoDNI">
                </div>
                <div class="form-group">
                    <label for="EgresadoNombreCompleto">Nombre completo</label>
                    <input class="form-control" type="text" name="EgresadoNombreCompleto" id="EgresadoNombreCompleto">
                </div>
                <div class="form-group">
                    <label for="EgresadoGenero">Género</label>
                    <input class="form-control" type="text" name="EgresadoGenero" id="EgresadoGenero">
                </div>
                <div class="form-group">
                    <label for="EgresadoCorreoElectronico">Correo electrónico</label>
                    <input class="form-control" type="text" name="EgresadoCorreoElectronico" id="EgresadoCorreoElectronico">
                </div>
                <div class="form-group">
                    <label for="EgresadoContrasena">Contraseña</label>
                    <input class="form-control" type="password" name="EgresadoContrasena" id="EgresadoContrasena">
                </div>
                <div class="form-group">
                    <label for="EgresadoPais">País</label>
                    <input class="form-control" type="text" name="EgresadoPais" id="EgresadoPais">
                </div>
                <div class="form-group">
                    <label for="EgresadoCiudad">Ciudad</label>
                    <input class="form-control" type="text" name="EgresadoCiudad" id="EgresadoCiudad">
                </div>
                <div class="form-group">
                    <label for="EgresadoEdad">Edad</label>
                    <input class="form-control" type="number" name="EgresadoEdad" id="EgresadoEdad">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
