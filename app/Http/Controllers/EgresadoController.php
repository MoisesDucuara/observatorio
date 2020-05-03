<?php
namespace App\Http\Controllers;

use App\Egresado;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    public function postRegistro(Request $request)
    {
        $EgresadoDNI=$request['EgresadoDNI'];
        $EgresadoNombreCompleto=$request['EgresadoNombreCompleto'];
        $EgresadoGenero=$request['EgresadoGenero'];
        $EgresadoCorreoElectronico=$request['EgresadoCorreoElectronico'];
        $EgresadoContrasena=bcrypt($request['EgresadoContrasena']);
        $EgresadoPais=$request['EgresadoPais'];
        $EgresadoCiudad=$request['EgresadoCiudad'];
        $EgresadoEdad=$request['EgresadoEdad'];

        $Egresado=new Egresado();

        $Egresado->EgresadoDNI=$EgresadoDNI;
        $Egresado->EgresadoNombreCompleto=$EgresadoNombreCompleto;
        $Egresado->EgresadoGenero=$EgresadoGenero;
        $Egresado->EgresadoCorreoElectronico=$EgresadoCorreoElectronico;
        $Egresado->EgresadoContrasena=$EgresadoContrasena;
        $Egresado->EgresadoPais=$EgresadoPais;
        $Egresado->EgresadoCiudad=$EgresadoCiudad;
        $Egresado->EgresadoEdad=$EgresadoEdad;

        $Egresado->save();

        return redirect()->back();
    }
}
