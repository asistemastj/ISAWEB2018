<?php

namespace App\Http\Controllers\Caso;

use App\Caso;
use App\Archivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasoArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Caso $caso)
    {
        #listamos los archivos de un caso
        $archivos = $caso->archivos;
        return response()->json(['data' => $archivos, 'code' => '200']);
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
    public function store(Request $request, Caso $caso)
    {
        #validación
        $this->validate($request, [
            'nombre' => 'required',
        ]);
        $data = $request->all();
        $data['nombre'] = $request->nombre->store('');
        $data['caso_id'] = $caso->id;
        #creamos archivo
        $archivo = Archivo::create($data);
        return response()->json(['data' => $archivo, 'code' => 200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function show(Caso $caso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function edit(Caso $caso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caso $caso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caso $caso)
    {
        //
    }
}
