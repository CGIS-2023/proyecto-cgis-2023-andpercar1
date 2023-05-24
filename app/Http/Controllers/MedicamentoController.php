<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicamentoRequest;
use App\Http\Requests\UpdateMedicamentoRequest;
use Illuminate\Http\Request;
use App\Models\Medicamento;
use App\Models\Farmacia;

class MedicamentoController extends Controller
{
   
    public function __construct()
    {
        $this->authorizeResource(Medicamento::class, 'medicamento'); 
    }

    

    public function index(Request $request)
{
    $medicamentos = Medicamento::query();

    $farmaciaId = $request->farmacia_id;
    if ($farmaciaId && $farmaciaId !== 'inicial') {
        $medicamentos->whereHas('farmacias', function ($query) use ($farmaciaId) {
            $query->where('farmacia_id', $farmaciaId);
        });
    }

    $medicamentos = $medicamentos->paginate(25);
    $farmacias = Farmacia::all();

    return view('/medicamentos/index', ['medicamentos' => $medicamentos, 'farmacias' => $farmacias]);
}


    


    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmacias = Farmacia::all();
        return view('medicamentos/create', ['farmacias' => $farmacias]);
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
        return view('medicamentos/show', ['medicamento' => $medicamento]);
    }

   
    public function edit(Medicamento $medicamento)
    {
        $farmacias = Farmacia::all();
        return view('medicamentos/edit', ['medicamento' => $medicamento, 'farmacias' => $farmacias]);
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

    public function attachFarmacia(Request $request, Medicamento $medicamento)
    {
        $this->validateWithBag('attach',$request, [
            'farmacia_id' => 'required|exists:farmacias,id',
            'codigo_stock' => 'required|string|max:9',
            
        ]);
        $medicamento->farmacias()->attach($request->farmacia_id, [
            'codigo_stock' => $request->codigo_stock
        ]);
        return redirect()->route('medicamentos.edit', $medicamento->id);
    }

    public function detachFarmacia(Medicamento $medicamento, Farmacia $farmacia)
    {
        $medicamento->farmacias()->detach($farmacia->id);
        return redirect()->route('medicamentos.edit', $medicamento->id);
    }
    
}
