<?php


Route::get('/', 'PessoaController@index');
Route::get('/pessoa', 'PessoaController@index');
Route::post('/pessoa/store', 'PessoaController@store');
