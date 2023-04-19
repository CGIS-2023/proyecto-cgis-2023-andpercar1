<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Farmacia;

class ClienteController extends Controller
{ 

    public function __construct()
    {
        $this->authorizeResource(Cliente::class, 'cliente'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate(25);
        return view('/clientes/index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmacias = Farmacia::all();
        return view('clientes/create', ['farmacias' => $farmacias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'DNI' => 'required|string|max:225',
            'telefono' => 'required|string|max:225',
            'num_seguridadsocial' => 'required|string|max:225',
            'direccion' => 'required|string|max:255'
        ]);
        $cliente = new Cliente($request->all());
        $cliente->save();
        session()->flash('success', 'Cliente creado correctamente.');
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes/edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'DNI' => 'required|string|max:225',
            'num_seguridadsocial' => 'required|string|max:225',
            'direccion' => 'required|string|max:255'
        ]);
        $cliente->fill($request->all());
        $cliente->save();
        session()->flash('success', 'Cliente modificado correctamente.');
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        if($cliente->delete()) {
            session()->flash('success', 'Cliente borrado correctamente.');
        }
        else{
            session()->flash('warning', 'No pudo borrarse el Cliente.');
        }
        return redirect()->route('clientes.index');
    }
}
