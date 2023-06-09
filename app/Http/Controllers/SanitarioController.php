<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSanitarioRequest;
use App\Http\Requests\UpdateSanitarioRequest;
use App\Models\Sanitario;
use App\Models\Farmacia;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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
        $farmacias = Farmacia::all();
        $sanitarios = Sanitario::paginate(25);
        return view('/sanitarios/index', ['sanitarios' => $sanitarios], ['farmacias' => $farmacias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmacias = Farmacia::all();
        return view('sanitarios/create', ['farmacias' => $farmacias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSanitarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:225',
            'telefono' => 'required|string|max:9',
            'DNI' => 'required|string|max:9'
        ]);
        $user = User::create([
            'name' => Hash::make($request->name),
            'email' => Hash::make($request->email),
            'password' => Hash::make($request->password),
        ]);
        $sanitario = new Sanitario($request->all());
        $sanitario->user_id = $user->id;
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
        return view('sanitarios/edit', ['sanitario' => $sanitario], ['farmacias' => $farmacias]);
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
            'telefono' => 'required|string|max:9',
            'DNI' => 'required|string|max:9'
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
        if($sanitario->delete()) {
            session()->flash('success', 'Sanitario borrado correctamente.');
        }
        else{
            session()->flash('warning', 'No pudo borrarse el Sanitario.');
        }
        return redirect()->route('sanitarios.index');
    }
} 
