<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//siswa
Route::get('/siswa','SiswaController@get');
Route::get('/siswa/{id}','SiswaController@getById');
Route::post('/siswa','SiswaController@post');
Route::put('/siswa/{id}','SiswaController@put');
Route::delete('/siswa/{id}','SiswaController@delete');

//ppdb

Route::get('/ppdb','PpdbController@get');
Route::post('/ppdb','PpdbController@post');

//file
Route::get('file/siswa_list','FileController@siswalist');
Route::post('file/siswa_list','FileController@siswalistSave');
Route::get('file/siswa_export','ExcelController@export_excel');
