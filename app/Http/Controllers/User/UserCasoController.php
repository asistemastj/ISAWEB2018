<?php

namespace App\Http\Controllers\User;

use App\Caso;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserCasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $usuario)
    {
        #casos que tiene 1 usuario
        $casos = $usuario->casos;
        return response()->json(['data' => $casos]);
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
        #validación
        $this->validate($request, [
            'titulo' => 'required|max:100',
            'contenido' => 'required|max:255',
            'conclusion' => 'nullable|string',
            'fecha' => 'date',
        ]);
        #si pasavalidacio
        $data = $request->all();
        $data['fecha'] = Carbon::now();
        $data['user_id'] = $usuario->id;
        #creamos envio
        $envio = Envio::create($data);
        return response()->json(['data' => $envio, 'code' => 201]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
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
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario, Caso $caso)
    {   
        #el usuario solo puede borrar su propio caso
        if($usuario->id == $caso->user_id){
            $caso->delete();
            return response()->json(['data' => $caso]);
        }
    }
}
