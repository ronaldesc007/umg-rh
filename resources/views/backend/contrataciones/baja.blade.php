@extends('backend.layouts.app')

@section('content')
{{ html()->modelForm($empleado, 'PATCH', route('admin.contratacion.confirmar-baja', $empleado->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Contratación <small class="text-muted">Dar de Baja</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">

                        <div class="form-group row">
                                {{ html()->label('Información')->class('col-md-2 form-control-label font-weight-bold')->for('etapa_cont') }}
        
                            <div class="col-md-10">
                                <strong>{{ $puesto->nombre_puesto }}</strong> - {{ $empleado->primer_nombre_emp }} {{ $empleado->primer_apellido_emp }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                                {{ html()->label('Seleccione el motivo')->class('col-md-2 form-control-label font-weight-bold')->for('etapa_cont') }}
        
                            <div class="col-md-4">
                                {{ html()->select('etapa_cont',$procesos)
                                    ->class('form-control')
                                    ->placeholder('Seleccione') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                                {{ html()->label('Fecha Fin Labores')->class('col-md-2 form-control-label font-weight-bold')->for('fecha_fin_cont') }}
        
                                <div class="col-md-4">
                                    {{ html()->date('fecha_fin_cont')
                                        ->class('form-control') }}
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
                        {{ form_submit('Confirmar','btn btn-success btn-lg font-weight-bold') }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}
@endsection
