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

Route::resourceVerbs([
    'create' => 'cadastrar',
    'edit' => 'editar'
]);

Route::group([
    'namespace' => 'Alunos',
    'prefix' => 'academia'
], function(){
    Route::resource('/alunos', 'AlunosController');
    Route::get('/alunos/{id}', 'AlunosController@show');

    Route::get('/alunos/{id}/editar', 'AlunosController@edit')->name('alunos.edit');
    Route::put('/alunos/{id}', 'AlunosController@edit')->name('alunos.update');
    Route::get('/alunos/{id}/remover', 'AlunosController@destroy')->name('alunos.destroy');
    // Route::get('/alunos/delete/{id}', 'AlunosController@delete')->name('alunos.delete');
});


