<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
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
        $user = new User;
        $user->nombre = $request->nombre;
        $user->apepat = $request->apepat;
        $user->apemat = $request->apemat;
        $user->email = $request->email;
        $user->rut = $request->rut;
        $user->dv = $request->dv;
        $user->rol = $request->rol;
        $user->activo = $request->activo;
        $user->save();
        $data = [
            'message' => 'Usuario creado!',
            'user' => $user
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user = new User;
        $user->nombre = $request->nombre;
        $user->apepat = $request->apepat;
        $user->apemat = $request->apemat;
        $user->email = $request->email;
        $user->rol = $request->rol;
        $user->activo = $request->activo;
        $user->save();
        $data = [
            'message' => 'Usuario actualizado!',
            'user' => $user
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        $data = [
            'message' => 'Usuario eliminado',
            'user' => $user
        ];
        return response()->json($data);
    }
}
