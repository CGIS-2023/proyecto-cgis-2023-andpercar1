<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFarmaciaRequest;
use App\Http\Requests\UpdateFarmaciaRequest;
use Illuminate\Http\Request;
use App\Models\Farmacia;
use App\Models\Cliente;

class FarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $farmacias = Farmacia::paginate(25);
        return view('/farmacias/index', ['farmacias' => $farmacias]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmacias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFarmaciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFarmaciaRequest $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'abierto' => 'required|boolean'
        ]);
        $farmacia = new Farmacia($request->all());
        $farmacia->save();
        session()->flash('success', 'Farmacia añadida correctamente.');
        return redirect()->route('farmacias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function show(Farmacia $farmacia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmacia $farmacia)
    {
        return view('farmacias/edit', ['farmacia' => $farmacia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFarmaciaRequest  $request
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFarmaciaRequest $request, Farmacia $farmacia)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'abierto' => 'required|boolean'
        ]);
        $farmacia->fill($request->all());
        $farmacia->save();
        session()->flash('success', 'Farmacia modificado correctamente.');
        return redirect()->route('farmacias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmacia $farmacia)
    {
        if($farmacia->delete()) {
            session()->flash('success', 'Farmacia eliminada correctamente.');
        }
        else{
            session()->flash('warning', 'No se pudo eliminar la Farmacia.');
        }
        return redirect()->route('farmacias.index');
    }
}
