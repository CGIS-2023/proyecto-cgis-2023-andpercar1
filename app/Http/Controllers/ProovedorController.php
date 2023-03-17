<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProovedorRequest;
use App\Http\Requests\UpdateProovedorRequest;
use App\Models\Proovedor;

class ProovedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProovedorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProovedorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proovedor $proovedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proovedor $proovedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProovedorRequest  $request
     * @param  \App\Models\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProovedorRequest $request, Proovedor $proovedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proovedor $proovedor)
    {
        //
    }
}
