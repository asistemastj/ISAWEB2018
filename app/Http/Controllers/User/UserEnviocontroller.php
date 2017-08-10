<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserEnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $usuario)
    {
        $envios = $usuario->envios;
        return response()->json(['data' => $envios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $usuario)
    {
        $destinatario_id =User::all()->except($usuario)->random()->id;
        #validación
        $this->validate($request, [
            'contenido' => 'required',
            'observacion' => 'nullable',
            'fechaEnvio' => 'required|date',
            'fechaEnvio' => 'nullable|date',
        ]);
        #si pasavalidacio
        $data = $request->all();
        $data['user_id'] = $usuario->id;
        $data['destinatario_id'] = $destinatario_id;
        #creamos envio
        $envio = Envio::create($data);
        return response()->json(['data' => $envio, 'code' => 201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        //
    }
}
