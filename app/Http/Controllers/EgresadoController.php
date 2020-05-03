<?php
namespace App\Http\Controllers;

use App\Egresado;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    public function postRegistro(Request $request)
    {
        $egresadoDNI=$request['egresadoDNI'];
        $egresadoNombreCompleto=$request['egresadoNombreCompleto'];
        $egresadoGenero=$request['egresadoGenero'];
        $egresadoCorreoElectronico=$request['egresadoCorreoElectronico'];
        $egresadoContrasena=bcrypt($request['egresadoContrasena']);
        $egresadoPais=$request['egresadoPais'];
        $egresadoCiudad=$request['egresadoCiudad'];
        $egresadoEdad=$request['egresadoEdad'];

        $egresado=new Egresado();

        $egresado->egresadoDNI=$egresadoDNI;
        $egresado->egresadoNombreCompleto=$egresadoNombreCompleto;
        $egresado->egresadoGenero=$egresadoGenero;
        $egresado->egresadoCorreoElectronico=$egresadoCorreoElectronico;
        $egresado->egresadoContrasena=$egresadoContrasena;
        $egresado->egresadoPais=$egresadoPais;
        $egresado->egresadoCiudad=$egresadoCiudad;
        $egresado->egresadoEdad=$egresadoEdad;

        $egresado->save();

        return redirect()->back();
    }
}
