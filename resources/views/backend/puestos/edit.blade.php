@extends('backend.layouts.app')

@section('content')
{{ html()->modelForm($puesto, 'PATCH', route('admin.puestos.update', $puesto->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Puestos <small class="text-muted">Crear Puesto</small>
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
                                    ->class('form-control')
                                    ->placeholder('Nombre del Puesto')
                                    ->attribute('maxlength', 250)
                                    ->autofocus() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Codigo')->class('col-md-2 form-control-label font-weight-bold')->for('codigo_puesto') }}
    
                            <div class="col-md-2">
                                {{ html()->text('codigo_puesto')
                                    ->class('form-control')
                                    ->placeholder('Codigo')
                                    ->attribute('maxlength', 6) }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Área')->class('col-md-2 form-control-label font-weight-bold')->for('area_puesto') }}
    
                            <div class="col-md-2">
                                {{ html()->select('area_puesto',$areas)
                                    ->class('form-control')
                                    ->placeholder('Seleccione') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Experiencia')->class('col-md-2 form-control-label font-weight-bold')->for('experiencia_puesto') }}
    
                                <div class="col-md-4">
                                    {{ html()->textarea('experiencia_puesto')
                                        ->class('form-control')
                                        ->placeholder('Experiencia requerida del puesto.')
                                        ->attribute('maxlength', 800) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario')->class('col-md-2 form-control-label font-weight-bold')->for('salario_puesto') }}
    
                                <div class="col-md-4">
                                    {{ html()->text('salario_puesto')
                                        ->class('form-control')
                                        ->placeholder('Salario')
                                        ->attribute('maxlength', 20)}}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Departamento')->class('col-md-2 form-control-label font-weight-bold')->for('depto_puesto') }}
    
                            <div class="col-md-2">
                                {{ html()->select('depto_puesto',$deptos)
                                    ->class('form-control')
                                    ->placeholder('Seleccione') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Descripción')->class('col-md-2 form-control-label font-weight-bold')->for('descripcion_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->textarea('descripcion_puesto')
                                        ->class('form-control')
                                        ->placeholder('Descripción del puesto.')
                                        ->attribute('maxlength', 800) }}
                                </div><!--col-->
                         </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Funciones')->class('col-md-2 form-control-label font-weight-bold')->for('funciones_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->textarea('funciones_puesto')
                                        ->class('form-control')
                                        ->placeholder('Funciones del puesto.')
                                        ->attribute('maxlength', 800) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Competencias')->class('col-md-2 form-control-label font-weight-bold')->for('competencias_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->textarea('competencias_puesto')
                                        ->class('form-control')
                                        ->placeholder('Competencias requeridas del puesto.')
                                        ->attribute('maxlength', 800) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Formación')->class('col-md-2 form-control-label font-weight-bold')->for('formacion_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->textarea('formacion_puesto')
                                        ->class('form-control')
                                        ->placeholder('Formación requerida del puesto.')
                                        ->attribute('maxlength', 800) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Comentarios')->class('col-md-2 form-control-label font-weight-bold')->for('comentarios_puesto') }}
    
                                <div class="col-md-10">
                                    {{ html()->textarea('comentarios_puesto')
                                        ->class('form-control')
                                        ->placeholder('Comentarios RRHH')
                                        ->attribute('maxlength', 800) }}
                                </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.puestos.index'), __('buttons.general.cancel'),'btn btn-danger btn-lg font-weight-bold') }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create'),'btn btn-success btn-lg font-weight-bold') }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}
@endsection
