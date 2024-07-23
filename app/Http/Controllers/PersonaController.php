<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::get();
        return view('personas', compact('personas'));
    }

    public function show($nPerCodigo){
        return view('show',[
            'persona' => Persona::find($nPerCodigo)
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(CreatePersonaRequest $request){

        Persona::create($request->validated());
 
        return redirect()->route('personas.index')->with('estado','La persona fue creada correctamente');
     }

     public function edit(Persona $persona)
    {
        return view('edit', [
            'persona' => $persona,
        ]);
    }

    public function update(Persona $persona, CreatePersonaRequest $request)
    {
        $persona->update($request->validated());
        return redirect()->route('personas.show', $persona)->with('estado','La persona fue actualizada correctamente');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','La persona fue eliminada correctamente');
    }
}