<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'categorias', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'categorias',            'uses'=>'\App\Http\Controllers\CategoriaController@index']);
    Route::get('create',           ['as'=>'categorias.create',     'uses'=>'\App\Http\Controllers\CategoriaController@create']);
    Route::get('{id}/destroy',     ['as'=>'categorias.destroy',    'uses'=>'\App\Http\Controllers\CategoriaController@destroy']);
    Route::get('{id}/edit',        ['as'=>'categorias.edit',       'uses'=>'\App\Http\Controllers\CategoriaController@edit']);
    Route::put('{id}/update',      ['as'=>'categorias.update',     'uses'=>'\App\Http\Controllers\CategoriaController@update']);
    Route::post('store',           ['as'=>'categorias.store',      'uses'=>'\App\Http\Controllers\CategoriaController@store']);
});
