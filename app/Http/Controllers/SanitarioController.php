<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSanitarioRequest;
use App\Http\Requests\UpdateSanitarioRequest;
use App\Models\Sanitario;
use App\Models\Farmacia;

class SanitarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->authorizeResource(Sanitario::class, 'sanitario'); 
    }

    public function index()
    {
        $sanitarios = Sanitario::paginate(25);
        return view('/sanitarios/index', ['sanitarios' => $sanitarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sanitarios/create', ['farmacias' => $farmacias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSanitarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSanitarioRequest $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:225',
            'telefono' => 'requires|string|max:9',
            'DNI' => 'requires|string|max:9'
        ]);
        $sanitario = new Sanitario($request->all());
        $sanitario->save();
        session()->flash('success', 'Sanitario creado correctamente.');
        return redirect()->route('sanitarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sanitario  $sanitario
     * @return \Illuminate\Http\Response
     */
    public function show(Sanitario $sanitario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sanitario  $sanitario
     * @return \Illuminate\Http\Response
     */
    public function edit(Sanitario $sanitario)
    {
        $farmacias = Farmacia::all();
        return view('sanitarios/edit', ['sanitario' => $sanitario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSanitarioRequest  $request
     * @param  \App\Models\Sanitario  $sanitario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSanitarioRequest $request, Sanitario $sanitario)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:225',
            'telefono' => 'requires|string|max:9',
            'DNI' => 'requires|string|max:9'
        ]);
        $sanitario->fill($request->all());
        $sanitario->save();
        session()->flash('success', 'Sanitario modificado correctamente.');
        return redirect()->route('sanitarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sanitario  $sanitario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanitario $sanitario)
    {
        if($medicamento->delete()) {
            session()->flash('success', 'Sanitario borrado correctamente.');
        }
        else{
            session()->flash('warning', 'No pudo borrarse el Sanitario.');
        }
        return redirect()->route('sanitarios.index');
    }
}
