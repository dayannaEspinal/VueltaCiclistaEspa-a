<?php

namespace App\Http\Controllers;

use App\Models\Ciclista;
use Illuminate\Http\Request;

class CiclistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaCiclistas = Ciclista::all();
        return view('ciclista.index')->with('ciclistas', $listaCiclistas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ciclista.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_equipo' => 'required|integer',
            'nombre' => 'required|string|max:50',
            'nacionalidad' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
        ]);

        $ciclista = new Ciclista();
        $ciclista->id_equipo = $request->id_equipo;
        $ciclista->nombre = $request->nombre;
        $ciclista->nacionalidad = $request->nacionalidad;
        $ciclista->fecha_nacimiento = $request->fecha_nacimiento;
        $ciclista->save();

        return redirect()->route('ciclista.index')->with('success', 'Ciclista creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ciclista = Ciclista::find($id);

        if (!$ciclista) {
            return redirect()->route('ciclista.index')->with('error', 'Ciclista no encontrado.');
        }

        return view('ciclista.show')->with('ciclista', $ciclista);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ciclista = Ciclista::find($id);

        if (!$ciclista) {
            return redirect()->route('ciclista.index')->with('error', 'Ciclista no encontrado.');
        }

        return view('ciclista.edit')->with('ciclista', $ciclista);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_equipo' => 'required|integer',
            'nombre' => 'required|string|max:50',
            'nacionalidad' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
        ]);

        $ciclista = Ciclista::find($id);

        if (!$ciclista) {
            return redirect()->route('ciclista.index')->with('error', 'Ciclista no encontrado.');
        }

        $ciclista->id_equipo = $request->id_equipo;
        $ciclista->nombre = $request->nombre;
        $ciclista->nacionalidad = $request->nacionalidad;
        $ciclista->fecha_nacimiento = $request->fecha_nacimiento;
        $ciclista->save();

        return redirect()->route('ciclista.index')->with('success', 'Ciclista actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado = Ciclista::find($id);

        if (!$eliminado) {
            return redirect()->route('ciclista.index')->with('error', 'Ciclista no encontrado.');
        }

        $eliminado->delete();

        return redirect()->route('ciclista.index')->with('success', 'Ciclista eliminado correctamente.');
    }

  
}
