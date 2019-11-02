<?php

namespace App\Http\Controllers\Backend;

use App\OperacionModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator, DB, Log, Redirect;
use App\EmpleadoModel;
use App\PuestoModel;
use App\ListadosModel;
use App\DeptoModel;
use App\ContratacionModel;

class OperacionesController extends Controller
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
     * @param  \App\OperacionModel  $operacionModel
     * @return \Illuminate\Http\Response
     */
    public function show(OperacionModel $operacionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OperacionModel  $operacionModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = EmpleadoModel::find($id);
        $puesto  = PuestoModel::find($empleado->puesto_emp);
        
        return view('backend.operaciones.create')
            ->withEmpleado($empleado)
            ->withPuesto($puesto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OperacionModel  $operacionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperacionModel $operacionModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OperacionModel  $operacionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperacionModel $operacionModel)
    {
        //
    }
}
