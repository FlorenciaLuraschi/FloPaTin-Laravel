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


Route::get('/ayuda_user', function () {
    return view('ayuda_user');
});

Route::get('/juego', function () {
    return view('juego');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::post('/login', function () {
    return view('login');
});

Route::get('/register', 'registroController@create');
Route::post('/register', 'registroController@store');
Route::get('/listadoUsuarios', 'registroController@index');
Route::get('/showUsuario', 'registroController@show');  //REVISAR
Route::get('/editUsuario/{usuario}/edit', 'registroController@edit');
Route::patch('/updateUsuario/{usuario}', 'registroController@update');
Route::get('/borrarUsuario/{usuario}', 'registroController@destroy');





Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/new', 'PostsController@create');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');
