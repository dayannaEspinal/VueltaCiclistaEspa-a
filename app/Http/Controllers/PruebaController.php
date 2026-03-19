<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaPruebas = Prueba::all();
        return view('prueba.index')->with('pruebas', $listaPruebas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'ciclista_ganador' => 'required|string|max:50',
            'clasificacion_final' => 'required|string|max:50',
            'numero_etapas' => 'required|integer',
            'anio_edicion' => 'required|integer|min:1900|max:2100',
            'km_totales' => 'required|integer',
        ]);

        $prueba = new Prueba();
        $prueba->nombre = $request->nombre;
        $prueba->ciclista_ganador = $request->ciclista_ganador;
        $prueba->clasificacion_final = $request->clasificacion_final;
        $prueba->numero_etapas = $request->numero_etapas;
        $prueba->anio_edicion = $request->anio_edicion;
        $prueba->km_totales = $request->km_totales;
        $prueba->save();

        return redirect()->route('prueba.index')->with('success', 'Prueba creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prueba = Prueba::find($id);

        if (!$prueba) {
            return redirect()->route('prueba.index')->with('error', 'Prueba no encontrada.');
        }

        return view('prueba.show')->with('prueba', $prueba);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prueba = Prueba::find($id);

        if (!$prueba) {
            return redirect()->route('prueba.index')->with('error', 'Prueba no encontrada.');
        }

        return view('prueba.edit')->with('prueba', $prueba);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'ciclista_ganador' => 'required|string|max:50',
            'clasificacion_final' => 'required|string|max:50',
            'numero_etapas' => 'required|integer',
            'anio_edicion' => 'required|integer|min:1900|max:2100',
            'km_totales' => 'required|integer',
        ]);

        $prueba = Prueba::find($id);

        if (!$prueba) {
            return redirect()->route('prueba.index')->with('error', 'Prueba no encontrada.');
        }

        $prueba->nombre = $request->nombre;
        $prueba->ciclista_ganador = $request->ciclista_ganador;
        $prueba->clasificacion_final = $request->clasificacion_final;
        $prueba->numero_etapas = $request->numero_etapas;
        $prueba->anio_edicion = $request->anio_edicion;
        $prueba->km_totales = $request->km_totales;
        $prueba->save();

        return redirect()->route('prueba.index')->with('success', 'Prueba actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado = Prueba::find($id);

        if (!$eliminado) {
            return redirect()->route('prueba.index')->with('error', 'Prueba no encontrada.');
        }

        $eliminado->delete();

        return redirect()->route('prueba.index')->with('success', 'Prueba eliminada correctamente.');
    }
}