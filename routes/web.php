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

Route::get('/hom', function () { return view('inicio');})->name('hom');
route::get('/nosotros', function () { return view('nosotros'); })->name('nosotros');
Route::get('/login', 'LogeoController@login')->name('login');
route::get('/registro', 'LogeoController@registro')->name('registro');
Route::post('/guardar', 'FormController@guardar_user')->name('guardar-u');
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

