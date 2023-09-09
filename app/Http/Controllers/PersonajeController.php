<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Http\Requests\PersonajeRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class PersonajeController extends Controller
{
    public function index():JsonResponse
    {
        //Listo todo los elementos
        return response()->json(Personaje::all(), 200);
    }

    public function store(PersonajeRequest $request):JsonResponse
    {
        //Creamos los personajes
        $personaje = Personaje::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $personaje
        ], 201);
    }

    public function show(string $id):JsonResponse
    {
        //
        $personaje = Personaje::find($id);
        return response()->json($personaje, 200);
    }

    public function update(PersonajeRequest $request, string $id):JsonResponse
    {
        //Actualizamos
        $personaje = Personaje::find($id);
        $personaje->name = $request->name;
        $personaje->age = $request->age;
        $personaje->save();

        return response()->json([
            'success' => true,
            'data' => $personaje

        ], 200);
    }

    public function destroy(string $id):JsonResponse
    {
        //Eliminamos
        Personaje::find($id)->delete();

        return response()->json([
            'success' => true
        ], 200);
    }
}
