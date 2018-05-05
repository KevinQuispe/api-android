<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
//ruta para persona api prueba
Route::get('persona/getdata','ControllerPersona@index');
Route::post('persona/create','ControllerPersona@store');


