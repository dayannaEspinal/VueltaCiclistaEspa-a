<?php

namespace App\Http\Controllers;

use App\Models\Participa;
use Illuminate\Http\Request;

class ParticipaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaParticipas = Participa::all();
        return view('participa.index')->with('participas', $listaParticipas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('participa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_equipo' => 'required|integer',
            'id_prueba' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fin_contrato' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        $participa = new Participa();
        $participa->id_equipo = $request->id_equipo;
        $participa->id_prueba = $request->id_prueba;
        $participa->fecha_inicio = $request->fecha_inicio;
        $participa->fin_contrato = $request->fin_contrato;
        $participa->save();

        return redirect()->route('participa.index')->with('success', 'Participacion creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $participa = Participa::find($id);

        if (!$participa) {
            return redirect()->route('participa.index')->with('error', 'Participacion no encontrada.');
        }

        return view('participa.show')->with('participa', $participa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $participa = Participa::find($id);

        if (!$participa) {
            return redirect()->route('participa.index')->with('error', 'Participacion no encontrada.');
        }

        return view('participa.edit')->with('participa', $participa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_equipo' => 'required|integer',
            'id_prueba' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fin_contrato' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        $participa = Participa::find($id);

        if (!$participa) {
            return redirect()->route('participa.index')->with('error', 'Participacion no encontrada.');
        }

        $participa->id_equipo = $request->id_equipo;
        $participa->id_prueba = $request->id_prueba;
        $participa->fecha_inicio = $request->fecha_inicio;
        $participa->fin_contrato = $request->fin_contrato;
        $participa->save();

        return redirect()->route('participa.index')->with('success', 'Participacion actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $participa = Participa::find($id);

        if (!$participa) {
            return redirect()->route('participa.index')->with('error', 'Participacion no encontrada.');
        }

        $participa->delete();

        return redirect()->route('participa.index')->with('success', 'Participacion eliminada correctamente.');
    }
}
