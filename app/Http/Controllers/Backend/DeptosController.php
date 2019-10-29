<?php

namespace App\Http\Controllers\Backend;

use App\DeptoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator, Redirect, DB, Log;


class DeptosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deptos = DeptoModel::paginate(15);
        return view('backend.deptos.index')
            ->withDeptos($deptos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.deptos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $rules = [
            'nombre_depto' => 'required',
            'codigo_depto' => 'required',            
        ];

        $Input = $request->all();
        $validator = Validator::make($Input, $rules);

        // process the store
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)->withInput();
        }
        
         // Start transaction!
        DB::beginTransaction();

        // store
        $edit_depto = new DeptoModel;
        $edit_depto->nombre_depto = $request->nombre_depto;
        $edit_depto->codigo_depto = $request->codigo_depto;
        $edit_depto->encargado_depto = $request->encargado_depto;
        $edit_depto->descripcion_depto = $request->descripcion_depto;
        $edit_depto->save();

        if (! $edit_depto) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha creado el siguiente nuevo departamento: '.$edit_depto->nombre_depto);
        
        return Redirect::route('admin.deptos.index')
            ->withFlashInfo('Nuevo Departamento Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeptoModel  $deptoModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $deptoModel = DeptoModel::findorFail($id);
        return view('backend.deptos.show')
            ->withDepto($deptoModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeptoModel  $deptoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(DeptoModel $deptoModel)
    {
        return view('backend.deptos.edit')
            ->withDepto($deptoModel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeptoModel  $deptoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // validate
        $rules = [
            'nombre_depto' => 'required',
            'codigo_depto' => 'required',            
        ];

        $Input = $request->all();
        $validator = Validator::make($Input, $rules);

        // process the store
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)->withInput();
        }
        
         // Start transaction!
        DB::beginTransaction();

        // store
        $edit_depto = DeptoModel::findOrFail($id);
        $edit_depto->nombre_depto = $request->nombre_depto;
        $edit_depto->codigo_depto = $request->codigo_depto;
        $edit_depto->encargado_depto = $request->encargado_depto;
        $edit_depto->descripcion_depto = $request->descripcion_depto;
        $edit_depto->save();

        if (! $edit_depto) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha editado el siguiente departamento: '.$edit_depto->nombre_depto);
        
        return Redirect::route('admin.deptos.index')
            ->withFlashInfo('Departamento Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeptoModel  $deptoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depto = DeptoModel::findorFail($id);
        $deptonombre = $depto->nombre_depto;
        $depto->delete();                
        Log::info('Se ha eliminado el departamento: '.$deptonombre);
        return redirect()->route('admin.deptos.index')->withFlashSuccess('El departamento ha sido eliminado.');
    }
}
