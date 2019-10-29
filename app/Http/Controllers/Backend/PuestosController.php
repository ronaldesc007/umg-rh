<?php

namespace App\Http\Controllers\Backend;

use App\PuestoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = PuestoModel::paginate(15);
        return view('backend.puestos.index')
            ->withPuestos($puestos);
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
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function show(PuestoModel $puestoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PuestoModel $puestoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PuestoModel $puestoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PuestoModel $puestoModel)
    {
        //
    }
}
