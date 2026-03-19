<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaEquipos = Equipo::all();
        return view('equipo.index')->with('equipos', $listaEquipos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'director' => 'required|string|max:50',
            'nacionalidad' => 'required|string|max:50',
        ]);

        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->director = $request->director;
        $equipo->nacionalidad = $request->nacionalidad;
        $equipo->save();

        return redirect()->route('equipo.index')->with('success', 'Equipo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return redirect()->route('equipo.index')->with('error', 'Equipo no encontrado.');
        }

        return view('equipo.show')->with('equipo', $equipo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return redirect()->route('equipo.index')->with('error', 'Equipo no encontrado.');
        }

        return view('equipo.edit')->with('equipo', $equipo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'director' => 'required|string|max:50',
            'nacionalidad' => 'required|string|max:50',
        ]);

        $equipo = Equipo::find($id);

        if (!$equipo) {
            return redirect()->route('equipo.index')->with('error', 'Equipo no encontrado.');
        }

        $equipo->nombre = $request->nombre;
        $equipo->director = $request->director;
        $equipo->nacionalidad = $request->nacionalidad;
        $equipo->save();

        return redirect()->route('equipo.index')->with('success', 'Equipo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado = Equipo::find($id);

        if (!$eliminado) {
            return redirect()->route('equipo.index')->with('error', 'Equipo no encontrado.');
        }

        $eliminado->delete();

        return redirect()->route('equipo.index')->with('success', 'Equipo eliminado correctamente.');
    }

}
