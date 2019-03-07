<?php

namespace App\Http\Controllers;

use App\Medic;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;

use Illuminate\Http\Request;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medics = medic::paginate();

        return view('medics.index', compact('medics')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        $medic = medic::create($request->all());

        return redirect()->route('medics.edit', $medic->id)
        ->with('info', 'medico guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function show(medic $medic)
    {
        return view('medics.show', compact('medic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function edit(medic $medic)
    {
        return view('medics.edit', compact('medic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, medic $medic)
    {
        $medic->update($request->all());

        return redirect()->route('medics.edit', $medic->id)
        ->with('info', 'medico actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function destroy(medic $medic)
    {
        $medic->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
