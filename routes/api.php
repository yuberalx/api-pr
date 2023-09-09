<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\LugarController;

Route::resource('/personaje', PersonajeController::class);

Route::resource('/lugar', LugarController::class);

// Route::get('/personaje',function(Request $request){
//     $personaje = Personaje::find(1);
//     return new PersonajeResource($personaje);
// });
