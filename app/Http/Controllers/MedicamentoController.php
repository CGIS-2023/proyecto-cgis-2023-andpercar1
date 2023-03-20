<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicamentoRequest;
use App\Http\Requests\UpdateMedicamentoRequest;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
   
    public function __construct()
    {
        $this->authorizeResource(Medicamento::class, 'medicamento');
    }

    public function index()
    {
        $medicamentos = Medicamento::paginate(25);
        return view('/medicamentos/index', ['medicamentos' => $medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamentos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'miligramos' => 'required|numeric'
        ]);
        $medicamento = new Medicamento($request->all());
        $medicamento->save();
        session()->flash('success', 'Medicamento creado correctamente.');
        return redirect()->route('medicamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
    }

   
    public function edit(Medicamento $medicamento)
    {
        return view('medicamentos/edit', ['medicamento' => $medicamento]);
    }

    public function update(Request $request, Medicamento $medicamento)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'miligramos' => 'required|numeric'
        ]);
        $medicamento->fill($request->all());
        $medicamento->save();
        session()->flash('success', 'Medicamento modificado correctamente.');
        return redirect()->route('medicamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        if($medicamento->delete()) {
            session()->flash('success', 'Medicamento borrado correctamente.');
        }
        else{
            session()->flash('warning', 'No pudo borrarse el Medicamento.');
        }
        return redirect()->route('medicamentos.index');
    }
}
