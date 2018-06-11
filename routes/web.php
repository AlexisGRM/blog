<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('Homework/{num1}/{num2}/a/{a}/b/{b}/a2/{a2}/b2/{b2}/c2/{c2}/n/{n}', function ($num1,$num2,$a,$b,$a2,$b2,$c2,$n) {
    return view('Ejercicio2',['num1'=>$num1,'num2'=>$num2,'a'=>$a,'b'=>$b,'a2'=>$a2,'b2'=>$b2,'c2' =>$c2,'n'=>$n]);
});

Route::get('/operaciones',function(){
  return view('operaciones');
});
Route::post('/Ejercicio2', "Ejercicio2Controller@operaciones");

//el bueno
Route::get('/mayo09',function(){
  return view('may09');
});

Route::post('/may09', "may09Controller@may09");

//layout
Route::get('/layout',function(){
  return view('layout');
});

Route::get('/primero',function(){
  return view('primero');
});

Route::get('/vista',function(){
  return view('vista');
});

Route::get('/vista2',function(){
  return view('vista2');
});

Route::get('/vista3',function(){
  return view('vista3');
});

Route::get('/vista4',function(){
  return view('vista4');
});

Route::get('/vista5',function(){
  return view('vista5');
});

Route::get('/vista6',function(){
  return view('vista6');
});

Route::get('/vista7',function(){
  return view('vista7');
});

Route::get('/vista8',function(){
  return view('vista8');
});

Route::get('/vista9',function(){
  return view('vista9');
});

Route::get('/vista10',function(){
  return view('vista10');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');


//Proyecto
Route::resource('plantas', 'PlantaController');

Route::resource('clientes', 'ClienteController');

Route::resource('cajas', 'CajaController');
