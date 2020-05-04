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
                    <label for="egresadoDNI">DNI</label>
                    <input class="form-control" type="text" name="egresadoDNI" id="egresadoDNI">
                </div>
                <div class="form-group">
                    <label for="egresadoNombreCompleto">Nombre completo</label>
                    <input class="form-control" type="text" name="egresadoNombreCompleto" id="egresadoNombreCompleto">
                </div>
                <div class="form-group">
                    <label for="egresadoGenero">Género</label>
                    <input class="form-control" type="text" name="egresadoGenero" id="egresadoGenero">
                </div>
                <div class="form-group">
                    <label for="egresadoCorreoElectronico">Correo electrónico</label>
                    <input class="form-control" type="text" name="egresadoCorreoElectronico" id="egresadoCorreoElectronico">
                </div>
                <div class="form-group">
                    <label for="egresadoContrasena">Contraseña</label>
                    <input class="form-control" type="password" name="egresadoContrasena" id="egresadoContrasena">
                </div>
                <div class="form-group">
                    <label for="egresadoPais">País</label>
                    <input class="form-control" type="text" name="egresadoPais" id="egresadoPais">
                </div>
                <div class="form-group">
                    <label for="egresadoCiudad">Ciudad</label>
                    <input class="form-control" type="text" name="egresadoCiudad" id="egresadoCiudad">
                </div>
                <div class="form-group">
                    <label for="egresadoEdad">Edad</label>
                    <input class="form-control" type="text" name="egresadoEdad" id="egresadoEdad">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1>Bienvenido</h1>
            <h6>Por favor, inicie sesión para continuar</h6>
            <form action="{{ route('iniciosesion') }}" method="post">
                <div class="form-group">
                    <label for="egresadoCorreoElectronico">Correo electrónico</label>
                    <input class="form-control" type="text" name="egresadoCorreoElectronico" id="egresadoCorreoElectronico">
                </div>
                <div class="form-group">
                    <label for="egresadoContrasena">Contraseña</label>
                    <input class="form-control" type="password" name="egresadoContrasena" id="egresadoContrasena">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 100px">Iniciar sesión</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
