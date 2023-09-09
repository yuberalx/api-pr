<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Models\Lugar;
use App\Http\Requests\LugarRequest;



class LugarController extends Controller
{public function index():JsonResponse
    {
        //Listo todo los elementos
        return response()->json(Lugar::all(), 200);
    }

    public function store(LugarRequest $request):JsonResponse
    {
        //Creamos los Lugar
        $personaje = Lugar::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $personaje
        ], 201);
    }

    public function show(string $id):JsonResponse
    {
        //
        $personaje = Lugar::find($id);
        return response()->json($personaje, 200);
    }

    public function update(LugarRequest $request, string $id):JsonResponse
    {
        //Actualizamos
        $personaje = Lugar::find($id);
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
        Lugar::find($id)->delete();

        return response()->json([
            'success' => true
        ], 200);
    }
}
