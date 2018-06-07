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

/*Route::get('/hola',function($formas){
	return view('hola',['formas'=>$formas]);
});*/

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/rectangulo/{base}/{altura}',function($base,$altura){
	return view('rectangulo',['base'=>$base,'altura'=>$altura]);
});

/*Route::get('/tabla/{a}/{b}/{c}',function($a,$b,$c){
	return view('tabla',['a'=>$a,'b'=>$b,'c'=>$c]);
});*/

Route::get('/tabla',function(){
	return view('tabla');
});

Route::post('/tabla','tablaController@tabla');


Route::get('/may09',function(){
	return view('may09');
});

Route::post('/may09','may09Controller@may09');


Route::get('/layout', function(){
	return view("layout");

});

Route::get('/primero', function(){
	return view("primero");

});

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');

Route::resource('plantas', 'PlantaController');

Route::resource('clientes', 'ClienteController');
