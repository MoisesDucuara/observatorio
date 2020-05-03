<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['midleware'=>['web']], function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/registro', [
        'uses'=>'EgresadoController@postRegistro', 'as'=>'registro'
    ]);
});



