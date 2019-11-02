@extends('backend.layouts.app')

@section('content')
{{ html()->modelForm($empleado, 'PATCH', route('admin.contratacion.update', $empleado->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Contratación <small class="text-muted">Iniciar Proceso</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">

                        <div class="form-group row">
                            {{ html()->label('Seleccione el puesto a asignar')->class('col-md-2 form-control-label font-weight-bold')->for('puesto_emp') }}
    
                            <div class="col-md-4">
                                {{ html()->select('puesto_emp',$puestos)
                                    ->class('form-control')
                                    ->placeholder('Seleccione') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                                {{ html()->label('Seleccione la etapa del proceso')->class('col-md-2 form-control-label font-weight-bold')->for('puesto_emp') }}
        
                            <div class="col-md-4">
                                {{ html()->select('etapa_cont',$procesos)
                                    ->class('form-control')
                                    ->placeholder('Seleccione') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                                {{ html()->label('Fecha Inicio Labores')->class('col-md-2 form-control-label font-weight-bold')->for('fecha_inicio_cont') }}
        
                                <div class="col-md-4">
                                    {{ html()->date('fecha_inicio_cont')
                                        ->class('form-control') }}
                                </div><!--col-->
                            </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Nombre')->class('col-md-2 form-control-label font-weight-bold')->for('primer_nombre_emp') }}

                            <div class="col-md-5">
                                {{ html()->text('primer_nombre_emp')
                                    ->class('form-control')
                                    ->placeholder('Primer nombre')
                                    ->attribute('maxlength', 250)
                                    ->autofocus() }}
                            </div><!--col-->

                            <div class="col-md-5">
                                {{ html()->text('segundo_nombre_emp')
                                    ->class('form-control')
                                    ->placeholder('Segundo nombre')
                                    ->attribute('maxlength', 250) }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Apellidos')->class('col-md-2 form-control-label font-weight-bold')->for('primer_apellido_emp') }}

                            <div class="col-md-5">
                                {{ html()->text('primer_apellido_emp')
                                    ->class('form-control')
                                    ->placeholder('Primer apellido')
                                    ->attribute('maxlength', 250) }}
                            </div><!--col-->

                            <div class="col-md-5">
                                {{ html()->text('segundo_apellido_emp')
                                    ->class('form-control')
                                    ->placeholder('Segundo apellido')
                                    ->attribute('maxlength', 250) }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Género')->class('col-md-2 form-control-label font-weight-bold')->for('genero_emp') }}
    
                            <div class="col-md-2">
                                {{ html()->select('genero_emp',$generos)
                                    ->class('form-control')
                                    ->placeholder('Seleccione') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Fecha Nacimiento')->class('col-md-2 form-control-label font-weight-bold')->for('fecha_nacimiento_emp') }}
    
                            <div class="col-md-4">
                                {{ html()->date('fecha_nacimiento_emp')
                                    ->class('form-control') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Estado Civil')->class('col-md-2 form-control-label font-weight-bold')->for('estado_civil_emp') }}
    
                            <div class="col-md-2">
                                {{ html()->select('estado_civil_emp',$estados)
                                    ->class('form-control')
                                    ->placeholder('Seleccione') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Dirección')->class('col-md-2 form-control-label font-weight-bold')->for('direccion_emp') }}
    
                                <div class="col-md-4">
                                    {{ html()->textarea('direccion_emp')
                                        ->class('form-control')
                                        ->placeholder('Dirección')
                                        ->attribute('maxlength', 300) }}
                                </div><!--col-->

                                <div class="col-md-4">
                                    {{ html()->textarea('direccion_adicional_emp')
                                        ->class('form-control')
                                        ->placeholder('Dirección adicional')
                                        ->attribute('maxlength', 300) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Teléfono')->class('col-md-2 form-control-label font-weight-bold')->for('telefono_emp') }}
    
                                <div class="col-md-4">
                                    {{ html()->text('telefono_emp')
                                        ->class('form-control')
                                        ->attribute('maxlength', 12) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Celular')->class('col-md-2 form-control-label font-weight-bold')->for('celular_emp') }}
    
                                <div class="col-md-4">
                                    {{ html()->text('celular_emp')
                                        ->class('form-control')
                                        ->attribute('maxlength', 12) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Correo Electrónico')->class('col-md-2 form-control-label font-weight-bold')->for('email_emp') }}
    
                                <div class="col-md-4">
                                    {{ html()->email('email_emp')
                                        ->class('form-control')
                                        ->attribute('maxlength', 100) }}
                                </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Comentarios')->class('col-md-2 form-control-label font-weight-bold')->for('comentarios_emp') }}
    
                                <div class="col-md-10">
                                    {{ html()->textarea('comentarios_emp')
                                        ->class('form-control')
                                        ->placeholder('Comentarios adicionales')
                                        ->attribute('maxlength', 800) }}
                                </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.candidatos.index'), __('buttons.general.cancel'),'btn btn-danger btn-lg font-weight-bold') }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create'),'btn btn-success btn-lg font-weight-bold') }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}
@endsection
