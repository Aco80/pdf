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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "Esto es un test";
});

Route::get('/reportes', function(){

  return view('reportes');
});

Route::get('/usuarios/{user}', function() {

return view('usuarios');

});

Route::get('/reportes', function() {
  return view('reportes');
});
