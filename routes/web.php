<?php


Route::get('/', 'PessoaController@index');
Route::get('/pessoa', 'PessoaController@index');
Route::post('/pessoa/store', 'PessoaController@store');
Route::post('/pessoa/{id}/edit', 'PessoaController@edit');
Route::post('/pessoa/update/{id}', 'PessoaController@update');
Route::post('/pessoa/destroy/{id}', 'PessoaController@destroy');
