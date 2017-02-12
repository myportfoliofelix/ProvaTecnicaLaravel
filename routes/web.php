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

/*
Route::get('/', function () {
    return view('welcome');
});

*/


Route::get('/', 'Acesso@areaHome');

Route::get('/cadastro', 'Acesso@areaCadastro');

Route::get('/acesso/logout', 'Acesso@logout');

Route::post('/login', 'Acesso@login');

Route::post('/', 'Acesso@cadastro');
