<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('inicio');
Route::view('programas','programas')->name('programas');
Route::get('talleres','App\Http\Controllers\Servicios2Controller@index')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');
Route::get('personas','App\Http\Controllers\PersonaController@index')->name('personas');
Route::get('personas/{nPerCodigo}','App\Http\Controllers\PersonaController@show')->name('persona.show');
