<?php

namespace App\Http\Controllers\Backend;

use App\CandidatoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator, DB, Log, Redirect;
use App\EmpleadoModel;
use App\PuestoModel;
use App\ListadosModel;
use App\DeptoModel;

class CandidatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = EmpleadoModel::where('puesto_emp',null)->paginate(15);
        return view('backend.empleados.index')
            ->withEmpleados($empleados);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CandidatoModel  $candidatoModel
     * @return \Illuminate\Http\Response
     */
    public function show(CandidatoModel $candidatoModel)
    {
        $generos  = ListadosModel::Generos()->pluck('option','id');
        $estados  = ListadosModel::Estado_Civil()->pluck('option','id');
        $puestos  = PuestoModel::pluck('nombre_puesto','id');

        return view('backend.empleados.show')
            ->withEmpleado($personal)
            ->withEstados($estados)    
            ->withPuestos($puestos)
            ->withGeneros($generos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CandidatoModel  $candidatoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidatoModel $candidatoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CandidatoModel  $candidatoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidatoModel $candidatoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CandidatoModel  $candidatoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidatoModel $candidatoModel)
    {
        //
    }
}
