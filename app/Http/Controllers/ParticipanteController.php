<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
  
    public function index()
    {
        $listaParticipantes = Participante::all();
        return view('participante.index')->with('participantes', $listaParticipantes);
    }

 
    public function create()
    {
        return view('participante.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'edad' => 'required|integer',
            'pais' => 'required|string|max:50',
        ]);

        $participante = new Participante();
        $participante->nombre = $request->nombre;
        $participante->edad = $request->edad;
        $participante->pais = $request->pais;
        $participante->save();

        return redirect('/participante')->with('success', 'Participante creado correctamente.');
    }

  
    public function show(string $id)
    {
        $participante = Participante::find($id);

        if (!$participante) {
            return redirect('/participante')->with('error', 'Participante no encontrado.');
        }

        return view('participante.show')->with('participante', $participante);
    }


    public function edit(string $id)
    {
        $participante = Participante::find($id);

        if (!$participante) {
            return redirect('/participante')->with('error', 'Participante no encontrado.');
        }

        return view('participante.edit')->with('participante', $participante);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'edad' => 'required|integer',
            'pais' => 'required|string|max:50',
        ]);

        $participante = Participante::find($id);

        if (!$participante) {
            return redirect('/participante')->with('error', 'Participante no encontrado.');
        }

        $participante->nombre = $request->nombre;
        $participante->edad = $request->edad;
        $participante->pais = $request->pais;
        $participante->save();

        return redirect('/participante')->with('success', 'Participante actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        $participante = Participante::find($id);

        if (!$participante) {
            return redirect('/participante')->with('error', 'Participante no encontrado.');
        }

        $participante->delete();

        return redirect('/participante')->with('success', 'Participante eliminado correctamente.');
    }
}
