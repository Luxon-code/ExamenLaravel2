<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Exception;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Equipo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $equipo = new Equipo();
            $equipo->nombre = $request->nombre;
            $equipo->programa_formacion = $request->programa_formacion;
            $equipo->escudo = $request->file('escudo')->store('escudos', 'public');
            $result = $equipo->save();
            if ($result) {
                $response = ['estado'=>true, 'mensaje'=>"Equipo agregado"];
            }else{
                $response = ['estado'=>false, 'mensaje'=>"Problemas al agregar equipo"];
            }
        } catch (Exception $e) {
            $response = ['estado'=>false, 'mensaje'=>$e->getMessage()];
        }
        return $response;
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
