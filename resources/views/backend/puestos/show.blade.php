@extends('backend.layouts.app')

@section('content')
{{ html()->modelForm($puesto, 'POST', route('admin.puestos.update', $puesto->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Puestos <small class="text-muted">Ver Puesto</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label('Nombre del Puesto')->class('col-md-2 form-control-label font-weight-bold')->for('nombre_puesto') }}

                            <div class="col-md-10">
                                {{ html()->text('nombre_puesto')
                                    ->class('form-control-plaintext') 
                                    ->disabled() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Codigo')->class('col-md-2 form-control-label font-weight-bold')->for('codigo_puesto') }}
    
                            <div class="col-md-2">
                                {{ html()->text('codigo_puesto')
                                    ->class('form-control-plaintext') 
                                    ->disabled() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Área')->class('col-md-2 form-control-label font-weight-bold')->for('area_puesto') }}
    
                            <div class="col-md-2">
                                {{ html()->select('area_puesto',$areas)
                                    ->class('form-control-plaintext')  }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Experiencia')->class('col-md-2 form-control-label font-weight-bold')->for('experiencia_puesto') }}
    
                                <div class="col-md-4">
                                    {{ html()->span('experiencia_puesto')
                                        ->class('form-control-plaintext') }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario')->class('col-md-2 form-control-label font-weight-bold')->for('salario_puesto') }}
    
                                <div class="col-md-4">
                                    {{ html()->text('salario_puesto')
                                        ->class('form-control-plaintext') 
                                        ->disabled() }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Departamento')->class('col-md-2 form-control-label font-weight-bold')->for('depto_puesto') }}
    
                            <div class="col-md-2">
                                {{ html()->select('depto_puesto',$deptos)
                                    ->class('form-control-plaintext disabled') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Descripción')->class('col-md-2 form-control-label font-weight-bold')->for('descripcion_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->span('descripcion_puesto')
                                        ->class('form-control-plaintext') }}
                                </div><!--col-->
                         </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Funciones')->class('col-md-2 form-control-label font-weight-bold')->for('funciones_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->span('funciones_puesto')
                                        ->class('form-control-plaintext') }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Competencias')->class('col-md-2 form-control-label font-weight-bold')->for('competencias_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->span('competencias_puesto')
                                        ->class('form-control-plaintext') }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Formación')->class('col-md-2 form-control-label font-weight-bold')->for('formacion_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->span('formacion_puesto')
                                        ->class('form-control-plaintext') }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Comentarios')->class('col-md-2 form-control-label font-weight-bold')->for('comentarios_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->span('comentarios_puesto')
                                        ->class('form-control-plaintext') }}
                                </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.puestos.index'), __('buttons.general.back'),'btn btn-danger btn-lg font-weight-bold') }}
                    </div><!--col-->

                    <!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}
@endsection
