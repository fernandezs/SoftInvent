<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});


Route::resource('etiquetas', 'EtiquetaAPIController');

Route::resource('generos', 'GeneroAPIController');

Route::resource('juegos', 'JuegoAPIController');

Route::resource('juegos', 'JuegoAPIController');

Route::resource('proveedors', 'ProveedorAPIController');

Route::resource('proveedors', 'ProveedorAPIController');

Route::resource('categorias', 'CategoriaAPIController');

Route::resource('articulos', 'ArticuloAPIController');

Route::resource('articulos', 'ArticuloAPIController');

Route::resource('repuestos', 'RepuestoAPIController');

Route::resource('articulos', 'ArticuloAPIController');

Route::resource('clientes', 'ClienteAPIController');

Route::resource('empleados', 'EmpleadoAPIController');

Route::resource('reparacions', 'ReparacionAPIController');

Route::get('reparaciones/reparacions', 'Reparaciones\ReparacionAPIController@index');
Route::post('reparaciones/reparacions', 'Reparaciones\ReparacionAPIController@store');
Route::get('reparaciones/reparacions/{reparacions}', 'Reparaciones\ReparacionAPIController@show');
Route::put('reparaciones/reparacions/{reparacions}', 'Reparaciones\ReparacionAPIController@update');
Route::patch('reparaciones/reparacions/{reparacions}', 'Reparaciones\ReparacionAPIController@update');
Route::delete('reparaciones/reparacions{reparacions}', 'Reparaciones\ReparacionAPIController@destroy');

Route::get('reparaciones/reparacions', 'Reparaciones\ReparacionAPIController@index');
Route::post('reparaciones/reparacions', 'Reparaciones\ReparacionAPIController@store');
Route::get('reparaciones/reparacions/{reparacions}', 'Reparaciones\ReparacionAPIController@show');
Route::put('reparaciones/reparacions/{reparacions}', 'Reparaciones\ReparacionAPIController@update');
Route::patch('reparaciones/reparacions/{reparacions}', 'Reparaciones\ReparacionAPIController@update');
Route::delete('reparaciones/reparacions{reparacions}', 'Reparaciones\ReparacionAPIController@destroy');