<?php

namespace App\Http\Controllers;

use App\Models\Punto;
use Illuminate\Http\Request;

class PuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puntos = Punto::all();
        return response()->json($puntos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $punto = new Punto;
        $punto->nombre = $request->nombre;
        $punto->tipo = $request->tipo;
        $punto->desc = $request->desc;
        $punto->lat = $request->lat;
        $punto->lon = $request->lon;
        $punto->activo = $request->activo;
        $punto->user_id = $request->user_id;
        $punto->save();
        $data = [
            'message' => 'Punto creado!',
            'punto' => $punto
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Punto $punto)
    {
        return response()->json($punto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Punto $punto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Punto $punto)
    {
        $punto = new Punto;
        $punto->nombre = $request->nombre;
        $punto->tipo = $request->tipo;
        $punto->desc = $request->desc;
        $punto->activo = $request->activo;
        $punto->user_id = $request->user_id;
        $punto->save();
        $data = [
            'message' => 'Punto actualizado!',
            'punto' => $punto
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Punto $punto)
    {
        $punto->delete();
        $data = [
            'message' => 'Punto eliminado',
            'punto' => $punto
        ];
        return response()->json($data);
    }
}
