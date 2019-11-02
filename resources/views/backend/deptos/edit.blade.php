@extends('backend.layouts.app')

@section('content')
{{ html()->modelForm($depto, 'PATCH', route('admin.deptos.update', $depto->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Departamentos <small class="text-muted">Editar Departamento</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label('Nombre del Departamento')->class('col-md-2 form-control-label font-weight-bold')->for('nombre_depto') }}

                        <div class="col-md-10">
                            {{ html()->text('nombre_depto')
                                ->class('form-control')
                                ->placeholder('Nombre del Departamento')
                                ->attribute('maxlength', 250)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label('Codigo')->class('col-md-2 form-control-label font-weight-bold')->for('last_name') }}

                        <div class="col-md-2">
                            {{ html()->text('codigo_depto')
                                ->class('form-control')
                                ->placeholder('Codigo')
                                ->attribute('maxlength', 6)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                    {{ html()->label('Jefatura')->class('col-md-2 form-control-label font-weight-bold')->for('last_name') }}

                        <div class="col-md-4">
                            {{ html()->text('encargado_depto')
                                ->class('form-control')
                                ->placeholder('Jefe de Departamento')
                                ->attribute('maxlength', 100)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label('Descripción')->class('col-md-2 form-control-label font-weight-bold')->for('last_name') }}

                            <div class="col-md-10">
                                {{ html()->textarea('descripcion_depto')
                                    ->class('form-control')
                                    ->placeholder('Descripción')
                                    ->attribute('maxlength', 800)
                                    ->required() }}
                            </div><!--col-->
                        </div><!--form-group-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.deptos.index'), __('buttons.general.cancel'),'btn btn-danger btn-lg font-weight-bold') }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update'),'btn btn-success btn-lg font-weight-bold') }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->closeModelForm() }}
@endsection
