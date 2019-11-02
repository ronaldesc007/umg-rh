<?php

namespace App\Http\Controllers\Backend;

use App\EmpleadoModel;
use App\PuestoModel;
use App\ListadosModel;
use App\DeptoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator, DB, Log, Redirect;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = EmpleadoModel::paginate(15);
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
        $generos  = ListadosModel::Generos()->pluck('option','id');
        $estados  = ListadosModel::Estado_Civil()->pluck('option','id');
        $puestos  = PuestoModel::pluck('nombre_puesto','id');

        return view('backend.empleados.create')
            ->withEstados($estados)    
            ->withPuestos($puestos)
            ->withGeneros($generos);
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
            'primer_nombre_emp' => 'required',
            'primer_apellido_emp' => 'required',            
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
        $new_emp = new EmpleadoModel;
        $new_emp->primer_nombre_emp = $request->primer_nombre_emp;
        $new_emp->segundo_nombre_emp = $request->segundo_nombre_emp;
        $new_emp->primer_apellido_emp = $request->primer_apellido_emp;
        $new_emp->segundo_apellido_emp = $request->segundo_apellido_emp;
        $new_emp->genero_emp = $request->genero_emp;
        $new_emp->fecha_nacimiento_emp = $request->fecha_nacimiento_emp;
        $new_emp->estado_civil_emp = $request->estado_civil_emp;
        $new_emp->direccion_emp = $request->direccion_emp;
        $new_emp->direccion_adicional_emp = $request->direccion_adicional_emp;
        $new_emp->telefono_emp = $request->telefono_emp;
        $new_emp->celular_emp = $request->celular_emp;
        $new_emp->email_emp = $request->email_emp;
        $new_emp->comentarios_emp = $request->comentarios_emp;
        //$new_emp->cv_emp = '';
        //$new_emp->foto_emp = '';
        //$new_emp->puesto_emp = '1';
        //$new_emp->master_location = '1';
        //$new_emp->location = '1';
        //$new_emp->sub_location = '1';
        $new_emp->save();

        if (! $new_emp) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha agregado al nuevo empleado: '.$new_emp->primer_nombre_emp.' '.$new_emp->primer_apellido_emp);
        
        return Redirect::route('admin.personal.index')
            ->withFlashInfo('Nuevo Empleado Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmpleadoModel  $empleadoModel
     * @return \Illuminate\Http\Response
     */
    public function show(EmpleadoModel $personal)
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
     * @param  \App\EmpleadoModel  $empleadoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpleadoModel $personal)
    {
        $generos  = ListadosModel::Generos()->pluck('option','id');
        $estados  = ListadosModel::Estado_Civil()->pluck('option','id');
        $puestos  = PuestoModel::pluck('nombre_puesto','id');

        return view('backend.empleados.edit')
            ->withEmpleado($personal)
            ->withEstados($estados)    
            ->withPuestos($puestos)
            ->withGeneros($generos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmpleadoModel  $empleadoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        $rules = [
            'primer_nombre_emp' => 'required',
            'primer_apellido_emp' => 'required',            
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
        $edit_emp = EmpleadoModel::findOrFail($id);
        $edit_emp->primer_nombre_emp = $request->primer_nombre_emp;
        $edit_emp->segundo_nombre_emp = $request->segundo_nombre_emp;
        $edit_emp->primer_apellido_emp = $request->primer_apellido_emp;
        $edit_emp->segundo_apellido_emp = $request->segundo_apellido_emp;
        $edit_emp->genero_emp = $request->genero_emp;
        $edit_emp->fecha_nacimiento_emp = $request->fecha_nacimiento_emp;
        $edit_emp->estado_civil_emp = $request->estado_civil_emp;
        $edit_emp->direccion_emp = $request->direccion_emp;
        $edit_emp->direccion_adicional_emp = $request->direccion_adicional_emp;
        $edit_emp->telefono_emp = $request->telefono_emp;
        $edit_emp->celular_emp = $request->celular_emp;
        $edit_emp->email_emp = $request->email_emp;
        $edit_emp->comentarios_emp = $request->comentarios_emp;
        //$edit_emp->cv_emp = '';
        //$edit_emp->foto_emp = '';
        //$edit_emp->puesto_emp = '1';
        //$edit_emp->master_location = '1';
        //$edit_emp->location = '1';
        //$edit_emp->sub_location = '1';
        $edit_emp->save();

        if (! $edit_emp) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha editado la información del empleado: '.$edit_emp->primer_nombre_emp.' '.$edit_emp->primer_apellido_emp);
        
        return Redirect::route('admin.personal.index')
            ->withFlashInfo('Empleado Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmpleadoModel  $empleadoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpleadoModel $personal)
    {        
        $personal->delete();                
        Log::info('Se ha eliminado el empleado ID: '.$personal->id);
        return redirect()->route('admin.personal.index')->withFlashSuccess('El empleado ha sido eliminado.');
    }
}
