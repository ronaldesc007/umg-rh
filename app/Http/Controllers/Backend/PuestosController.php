<?php

namespace App\Http\Controllers\Backend;

use App\PuestoModel;
use App\ListadosModel;
use App\DeptoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator, DB, Log, Redirect;

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
        $areas  = ListadosModel::Puesto_Area()->pluck('option','id');
        $deptos = DeptoModel::pluck('nombre_depto','id');

        return view('backend.puestos.create')
            ->withDeptos($deptos)
            ->withAreas($areas);
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
            'nombre_puesto' => 'required',
            'codigo_puesto' => 'required',
            'experiencia_puesto' => 'required',
            'salario_puesto' => 'required',
            'depto_puesto' => 'required',
            'descripcion_puesto' => 'required',
            'funciones_puesto' => 'required',
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
        $new_puesto = new PuestoModel;
        $new_puesto->nombre_puesto = $request->nombre_puesto;
        $new_puesto->codigo_puesto = $request->codigo_puesto;
        $new_puesto->area_puesto = $request->area_puesto;
        $new_puesto->depto_puesto = $request->depto_puesto;
        $new_puesto->descripcion_puesto = $request->descripcion_puesto;
        $new_puesto->funciones_puesto = $request->funciones_puesto;
        $new_puesto->competencias_puesto = $request->competencias_puesto;
        $new_puesto->formacion_puesto = $request->formacion_puesto;
        $new_puesto->experiencia_puesto = $request->experiencia_puesto;
        $new_puesto->salario_puesto = $request->salario_puesto;
        $new_puesto->comentarios_puesto = $request->comentarios_puesto;
        $new_puesto->save();

        if (! $new_puesto) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha creado el siguiente nuevo departamento: '.$new_puesto->nombre_puesto);
        
        return Redirect::route('admin.puestos.index')
            ->withFlashInfo('Nuevo Puesto Agregado');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function show(PuestoModel $puesto)
    {
        $areas  = ListadosModel::Puesto_Area()->pluck('option','id');
        $deptos = DeptoModel::pluck('nombre_depto','id');
        
        return view('backend.puestos.show')
            ->withPuesto($puesto)
            ->withDeptos($deptos)
            ->withAreas($areas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PuestoModel $puesto)
    {
        $areas  = ListadosModel::Puesto_Area()->pluck('option','id');
        $deptos = DeptoModel::pluck('nombre_depto','id');

        return view('backend.puestos.edit')
            ->withPuesto($puesto)
            ->withDeptos($deptos)
            ->withAreas($areas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // validate
         $rules = [
            'nombre_puesto' => 'required',
            'codigo_puesto' => 'required',
            'experiencia_puesto' => 'required',
            'salario_puesto' => 'required',
            'depto_puesto' => 'required',
            'descripcion_puesto' => 'required',            
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
        $edit_puesto = PuestoModel::findOrFail($id);
        $edit_puesto->nombre_puesto = $request->nombre_puesto;
        $edit_puesto->codigo_puesto = $request->codigo_puesto;
        $edit_puesto->area_puesto = $request->area_puesto;
        $edit_puesto->depto_puesto = $request->depto_puesto;
        $edit_puesto->descripcion_puesto = $request->descripcion_puesto;
        $edit_puesto->funciones_puesto = $request->funciones_puesto;
        $edit_puesto->competencias_puesto = $request->competencias_puesto;
        $edit_puesto->formacion_puesto = $request->formacion_puesto;
        $edit_puesto->experiencia_puesto = $request->experiencia_puesto;
        $edit_puesto->salario_puesto = $request->salario_puesto;
        $edit_puesto->comentarios_puesto = $request->comentarios_puesto;
        $edit_puesto->save();

        if (! $edit_puesto) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha editado el siguiente puesto: '.$edit_puesto->nombre_puesto);
        
        return Redirect::route('admin.puestos.index')
            ->withFlashInfo('Puesto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PuestoModel  $puestoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PuestoModel $puesto)
    {
        $puestonombre = $puesto->nombre_depto;
        $puesto->delete();                
        Log::info('Se ha eliminado el puesto: '.$puestonombre);
        return redirect()->route('admin.puestos.index')->withFlashSuccess('El puesto ha sido eliminado.');
    }
}
