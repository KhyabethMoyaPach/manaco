<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        //
        return response()->json(Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'direccion'=>'required',
            'celular'=>'nullable',
            'nit'=>'required',
        ]);
        $cliente = Cliente::create(
            $request->all()
        );
        return response()->json([
            'mensaje'=>'Cliente creado exitosamente',
            'cliente'=>$cliente
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente = Cliente::find($id);
        if(!$cliente){
            return response()->json([
                'mensaje' => 'Cliente no encontrado'
            ], 404
        );
        }else{

        }
        return response()->json($cliente,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $cliente = Cliente::find($id);
        if(!$cliente){
            return response()->json([
                'mensaje' => 'Cliente no encontrado'
            ], 404
        );
        }
         $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'direccion'=>'required',
            'celular'=>'nullable',
            'nit'=>'required',
        ]);
         $cliente->update($request->all());

        return response()->json([
            'mensaje'=>'Cliente actualizado exitosamente',
            'cliente'=>$cliente
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cliente = Cliente::find($id);
         if(!$cliente){
            return response()->json([
                'mensaje' => 'Cliente no encontrado'
            ], 404
        );
         }
        $cliente->delete();
        return response()->json([
            'mensaje'=>'Cliente eliminado exitosamente'
        ],200);
    }
}

