<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('inicio');
Route::view('programas','programas')->name('programas');
Route::get('talleres','App\Http\Controllers\Servicios2Controller@index')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto','App\Http\Controllers\ContactoController@store');
Route::resource('personas', 'App\Http\Controllers\PersonaController')->names('personas');
Auth::routes(['register' => true]);

