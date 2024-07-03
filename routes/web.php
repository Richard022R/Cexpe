<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('inicio');
Route::view('programas','programas')->name('programas');
Route::get('talleres','App\Http\Controllers\Servicios2Controller@index')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto','App\Http\Controllers\ContactoController@store');
Route::get('personas','App\Http\Controllers\PersonaController@index')->name('personas.index');
Route::get('personas/crear', 'App\Http\Controllers\PersonaController@create')->name('persona.create');
Route::get('personas/{persona}/editar','App\Http\Controllers\PersonaController@edit')->name('personas.edit');
Route::patch('personas/{persona}','App\Http\Controllers\PersonaController@update')->name('personas.update');
Route::post('personas', 'App\Http\Controllers\PersonaController@store')->name('personas.store');
Route::get('personas/{nPerCodigo}','App\Http\Controllers\PersonaController@show')->name('persona.show');
Route::delete('personas/{persona}','App\Http\Controllers\PersonaController@destroy')->name('persona.destroy');

