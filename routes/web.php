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

Route::get('/corpo', function () {
    return view('layout/corpo');
});


//funcionários
Route::get('/funcionarios', 'CrudController@listafun');

Route::get('/cadfuncionario', 'CrudController@novofun');

Route::post('/funcionarios/adicionafun', 'CrudController@adicionafun');










//regioes
Route::get('/regioes', 'CrudController@listareg');

Route::get('/cadregioes', 'CrudController@novoreg');

Route::post('/regioes/adicionareg', 'CrudController@adicionareg');

//Route::get('/funcionarios/remove/{IDFuncionario}', 'ProdutoController@removefun');














//territórios
Route::get('/territorios', 'CrudController@listater');

Route::get('/cadterritorios', 'CrudController@novoter');

Route::post('/territorios/adicionater', 'CrudController@adicionater');











//funcionários territórios
Route::get('/funcionarios-territorios', 'CrudController@listafunter');

Route::get('/cadfuncionario_territorio', 'CrudController@novofunter');

Route::post('/funcionarios_territorios/adicionafunter', 'CrudController@adicionafunter');

