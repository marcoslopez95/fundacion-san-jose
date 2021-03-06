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
// ------- Rutas de Laravel
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ------------------------------
// --------- Menu ---------------
Route::get('/hom', function () { return view('inicio');})->name('hom');
route::get('/nosotros', function () { return view('nosotros'); })->name('nosotros');
route::get('/welcome', function() { return view('sesion.welcome');})->name('inicio_sesion');
// ------- Logeo ---------------
Route::get('/login', 'LogeoController@login')->name('login');
// ------- Registro de Tablas Maestras ----------
route::get('/registro-disc-cond','FormController@guardar_discapacidad')->name('registro-d');
route::get('/registro-user', 'LogeoController@registro')->name('registro-u');
// -------- Guardar Tablas Maestras -------------
Route::post('/guardar/user', 'FormController@guardar_user')->name('guardar-u');
Route::post('/guardar/cond-disc', 'FormController@guardar_disfuncion')->name('guardar-d');
//  ------- Registro de Tablas transaccionales ---------
Route::post('/guardar/cond', 'FormController@actualizar_cond_pac')->name('save-d');
//  ------- Guardar Tablas transaccionales ---------

route::get('/prueba', function () {
        
    function geth(){
        $val="|<[tr^>]<[td^>]<[b^>]<[font^>]Nombre:</[font^>]+></[b^>]+></[td^>]+><[td^>]<[b^>](.*)</[b^>]+></[td^>]+></[tr^>]+>|U";
        $pag= view('html-cne');

        preg_match_all("|<[div^>](.*)</[div^>]+>|U","<b>ejemplo: </b><div align=\"left\">esto es una prueba</div>",$salida);
        // preg_match_all($val,$pag,$salida);
    print_r($salida);
    }
    return geth();
        // echo $title_out;
        
});

