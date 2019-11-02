<?php

namespace App\Http\Controllers\Backend;

use App\ContratacionModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator, DB, Log, Redirect;
use App\EmpleadoModel;
use App\PuestoModel;
use App\ListadosModel;
use App\DeptoModel;

class ContratacionesController extends Controller
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
     * @param  \App\ContratacionModel  $contratacionModel
     * @return \Illuminate\Http\Response
     */
    public function show(ContratacionModel $contratacionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContratacionModel  $contratacionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ContratacionModel $contratacionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContratacionModel  $contratacionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        $rules = [
            'primer_nombre_emp' => 'required',
            'primer_apellido_emp' => 'required',
            'puesto_emp' => 'required',
            'etapa_cont' => 'required',
            'fecha_inicio_cont' => 'required_if:etapa_cont,5',            
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
        if($request->etapa_cont == 5) {
            $edit_emp->puesto_emp = $request->puesto_emp;
        }        
        //$edit_emp->master_location = '1';
        //$edit_emp->location = '1';
        //$edit_emp->sub_location = '1';
        $edit_emp->save();

        $edit_cont = ContratacionModel::where('empleado','=',$edit_emp->id)->first();
        if($edit_cont) {
            $new_cont = $edit_cont;
        }
        else {
            $new_cont = new ContratacionModel;
        }

        $new_cont->puesto = $request->puesto_emp;
        $new_cont->empleado = $edit_emp->id;
        $new_cont->etapa_cont = $request->etapa_cont;
        // 5 = contratado
        if($request->etapa_cont == 5) {
            $new_cont->fecha_inicio_cont = $request->fecha_inicio_cont;
        }
        $new_cont->save();

        if (! $new_cont) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }

        if (! $edit_emp) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha actualizado el proceso del siguiente empleado: '.$edit_emp->primer_nombre_emp.' '.$edit_emp->primer_apellido_emp);
        
        if($request->etapa_cont == 5) {
            return Redirect::route('admin.personal.index')
            ->withFlashInfo('Candidato Contratado');
        } else {
            return Redirect::route('admin.candidatos.index')
            ->withFlashInfo('Proceso Actualizado');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContratacionModel  $contratacionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContratacionModel $contratacionModel)
    {
        //
    }

    /**
     * .
     *
     * @return \Illuminate\Http\Response
     */
    public function iniciar(EmpleadoModel $empleado)
    {
        $generos  = ListadosModel::Generos()->pluck('option','id');
        $procesos = ListadosModel::Proceso_Contratacion()->where('id','<',7)->pluck('option','id');
        
        if(ContratacionModel::count() == 0) {
            $puestos  = PuestoModel::pluck('nombre_puesto','puestos.id');
        } else {
            $puestos  = PuestoModel::join('empleados','puesto_emp','<>','puestos.id')
            ->pluck('nombre_puesto','puestos.id');
        }
        
            $estados  = ListadosModel::Estado_Civil()->pluck('option','id');

        return view('backend.contrataciones.edit')
            ->withEmpleado($empleado)
            ->withEstados($estados)
            ->withProcesos($procesos)    
            ->withPuestos($puestos)
            ->withGeneros($generos);
    }

    /**
     * .
     *
     * @param  \App\ContratacionModel  $contratacionModel
     * @return \Illuminate\Http\Response
     */
    public function baja(EmpleadoModel $empleado)
    {
        
        $procesos = ListadosModel::Proceso_Contratacion()->where('id','>=',7)->pluck('option','id');
        $puesto  = PuestoModel::find($empleado->puesto_emp);
            
        return view('backend.contrataciones.baja')
            ->withEmpleado($empleado)
            ->withPuesto($puesto)
            ->withProcesos($procesos);
    }

    /**
     * .
     *
     * @param  \App\ContratacionModel  $contratacionModel
     * @return \Illuminate\Http\Response
     */
    public function confirmar_baja(Request $request, $id)
    {
        // validate
        $rules = [
            'etapa_cont' => 'required',
            'fecha_fin_cont' => 'required',            
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
            $edit_emp->puesto_emp = null;
        $edit_emp->save();

        $edit_cont = ContratacionModel::where('empleado',$id)->where('etapa_cont','=','5')->first();
        $edit_cont->empleado = $edit_emp->id;
        $edit_cont->etapa_cont = $request->etapa_cont;
        $edit_cont->fecha_fin_cont = $request->fecha_fin_cont;
        $edit_cont->save();

        if (! $edit_cont) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }

        if (! $edit_emp) {
            DB::rollback(); //Rollback Transaction
            return Redirect::back()->withInput()->withFlashDanger('DB::Error');
        }
        
        DB::commit(); // Commit if no error
        
        Log::info('Se ha actualizado el proceso del siguiente empleado: '.$edit_emp->primer_nombre_emp.' '.$edit_emp->primer_apellido_emp);
        
        if($request->etapa_cont == 5) {
            return Redirect::route('admin.personal.index')
            ->withFlashInfo('Candidato Contratado');
        } else {
            return Redirect::route('admin.candidatos.index')
            ->withFlashInfo('Proceso Actualizado');
        }
            
    }

}
