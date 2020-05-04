<?php
namespace App\Http\Controllers;

use App\Egresado    ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EgresadoController extends Controller
{
    public function getDashboard()
    {
        return view('dashboard');
    }

    public function postRegistro(Request $request)
    {
        $egresadoDNI=$request['egresadoDNI'];
        $egresadoNombreCompleto=$request['egresadoNombreCompleto'];
        $egresadoGenero=$request['egresadoGenero'];
        $egresadoCorreoElectronico=$request['egresadoCorreoElectronico'];
        $egresadoContrasena=$request['egresadoContrasena'];
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
        $egresado->egresadoNotificacion=0;
        $egresado->egresadoFlagConfirmacion=0;

        $egresado->save();

        return redirect()->route('dashboard');
    }

    public function postInicioSesion(Request $request)
    {
        if (Auth::attempt(['egresadoCorreoElectronico'=>$request['egresadoCorreoElectronico'],
            'egresadoContrasena'=>$request['egresadoContrasena']]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
