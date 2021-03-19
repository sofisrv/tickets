<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	 //Session::flush(); 
    return view('login');
});

Route::get('/index', function () {


    return View::make('index');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/busqueda', function () {
    return view('busqueda');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/knowledge', function () {
    return view('knowledge');
});

Route::get('/knowledge_admin', function () {
    return view('knowledge_admin');
});

Route::get('/caso', function (){

    return view('caso');
});

/*Route::get('/caso', array('as' => 'caso', 'uses' => 'HomeController@caso'));
Route::get('/knowledge', array('as' => 'knowledge', 'uses' => 'HomeController@knowledge'));*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('pdf', 'informeController@informe');


Route::get('storage/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);
 
});

//Route::post('/ws/get_tag_message','Controller@get_chat_message');
Route::post('/loginme','loginController@login');
Route::post('/guardaruser','regController@regis');
Route::post('/validuser','valController@validar');
Route::post('/problema','casoController@caso');
Route::post('/elblog','blogController@blog');
Route::post('/faq','updblogController@bloger');
Route::post('/informe','informeController@informe');
Route::post('/informe_val','informe_valController@informe');
Route::post('/buscar','busqController@buscar');
Route::post('/corre','correoController@correo');
Route::post('/tickets','ticketController@ticket');
Route::post('/invent','inventarioController@inventario');

/*Route::post('/loginme',function(){

	echo "funciona";
});*/



Route::get('/index_admin', function () {
    return view('index_admin');
});

Route::get('/correo', function () {
    return view('correo');
});

Route::get('/validar', function () {
    return view('validar');
});


Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/perfil_admin', function () {
    return view('perfil_admin');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/ticket_admin', function () {
    return view('ticket_admin');
});

Route::get('/novalidado', function () {
    return view('novalidado');
});

Route::get('/inventario', function (){

    return view('inventario');
});

Route::get('/inventario_ver', function (){

    return view('inventario_ver');
});