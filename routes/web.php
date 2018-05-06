<?php

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


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('user/profile/{user}', 'UserController@editProfile')->name('user.edit.profile');
Route::patch('user/profile/{user}', 'UserController@updateProfile')->name('user.update.profile');

Route::resource('admin/configurations', 'ConfigurationController');
Route::resource('admin/rols', 'RolController');
Route::resource('admin/users', 'UserController');
Route::get('/admin/user/{user}/menu', 'UserController@menu')->name('user.menu');;
Route::patch('/admin/user/menu/{user}', 'UserController@menuStore')->name('users.menuStore');

Route::get('/admin/option/create/{padre}', 'OptionMenuController@create');
Route::get('/admin/option/orden', 'OptionMenuController@updateOrden');
Route::post('/admin/option/orden', 'OptionMenuController@updateOrden');
Route::resource('/admin/option',"OptionMenuController");

Route::get('prueba/pdf', function (\App\Extensiones\Fpdf $fpdf) {
    $fpdf->AddPage();
    $fpdf->SetFont('Courier', 'B', 18);
    $fpdf->Cell(50, 25, 'Hello World!');
    $fpdf->Cell(60, 35, 'Hello World X2!');
    $fpdf->Output();
    exit();
});



Route::resource('proveedores', 'ProveedorController');

Route::resource('categorias', 'CategoriaController');

Route::resource('articulos', 'ArticuloController');

Route::resource('articulos', 'ArticuloController');

Route::resource('repuestos', 'RepuestoController');

Route::resource('articulos', 'ArticuloController');

Route::resource('clientes', 'ClienteController');

Route::resource('empleados', 'EmpleadoController');

Route::resource('reparaciones', 'ReparacionController');

Route::get('reparaciones/reparacions', ['as'=> 'reparaciones.reparacions.index', 'uses' => 'Reparaciones\ReparacionController@index']);
Route::post('reparaciones/reparacions', ['as'=> 'reparaciones.reparacions.store', 'uses' => 'Reparaciones\ReparacionController@store']);
Route::get('reparaciones/reparacions/create', ['as'=> 'reparaciones.reparacions.create', 'uses' => 'Reparaciones\ReparacionController@create']);
Route::put('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.update', 'uses' => 'Reparaciones\ReparacionController@update']);
Route::patch('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.update', 'uses' => 'Reparaciones\ReparacionController@update']);
Route::delete('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.destroy', 'uses' => 'Reparaciones\ReparacionController@destroy']);
Route::get('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.show', 'uses' => 'Reparaciones\ReparacionController@show']);
Route::get('reparaciones/reparacions/{reparacions}/edit', ['as'=> 'reparaciones.reparacions.edit', 'uses' => 'Reparaciones\ReparacionController@edit']);


Route::get('reparaciones/reparacions', ['as'=> 'reparaciones.reparacions.index', 'uses' => 'Reparaciones\ReparacionController@index']);
Route::post('reparaciones/reparacions', ['as'=> 'reparaciones.reparacions.store', 'uses' => 'Reparaciones\ReparacionController@store']);
Route::get('reparaciones/reparacions/create', ['as'=> 'reparaciones.reparacions.create', 'uses' => 'Reparaciones\ReparacionController@create']);
Route::put('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.update', 'uses' => 'Reparaciones\ReparacionController@update']);
Route::patch('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.update', 'uses' => 'Reparaciones\ReparacionController@update']);
Route::delete('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.destroy', 'uses' => 'Reparaciones\ReparacionController@destroy']);
Route::get('reparaciones/reparacions/{reparacions}', ['as'=> 'reparaciones.reparacions.show', 'uses' => 'Reparaciones\ReparacionController@show']);
Route::get('reparaciones/reparacions/{reparacions}/edit', ['as'=> 'reparaciones.reparacions.edit', 'uses' => 'Reparaciones\ReparacionController@edit']);
