<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Models\Admin\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes =Paciente::get();
        return view('pacientes.index',compact('pacientes'));
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
     * @param  \App\Http\Requests\StorePacienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePacienteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)///(Paciente $paciente)
    {
        return view('pacientes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePacienteRequest  $request
     * @param  \App\Models\Admin\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
