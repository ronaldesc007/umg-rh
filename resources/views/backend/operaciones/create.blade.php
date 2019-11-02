@extends('backend.layouts.app')

@section('content')
    {{ html()->form('POST', route('admin.operacion.store'))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Operaciones <small class="text-muted">Calculo Indemnización</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        
                        <div class="form-group row">
                            {{ html()->label('Tipo de Salario')->class('col-md-2 form-control-label font-weight-bold') }}

                            <div class="col-md-3 text-center text-capitalize">
                                <strong>Ordinario</strong>
                            </div><!--col-->

                            <div class="col-md-3 text-center text-capitalize">
                                <strong>Extraordinario</strong>
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 1')->class('col-md-2 form-control-label font-weight-bold')->for('salario1') }}

                            <div class="col-md-3">
                                {{ html()->text('salario1')
                                    ->class('form-control')
                                    ->autofocus()
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext1')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 2')->class('col-md-2 form-control-label font-weight-bold')->for('salario2') }}

                            <div class="col-md-3">
                                {{ html()->text('salario2')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext2')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->
                        
                        <div class="form-group row">
                            {{ html()->label('Salario Mes 3')->class('col-md-2 form-control-label font-weight-bold')->for('salario3') }}

                            <div class="col-md-3">
                                {{ html()->text('salario3')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext3')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 4')->class('col-md-2 form-control-label font-weight-bold')->for('salario4') }}

                            <div class="col-md-3">
                                {{ html()->text('salario4')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext4')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 5')->class('col-md-2 form-control-label font-weight-bold')->for('salario5') }}

                            <div class="col-md-3">
                                {{ html()->text('salario5')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext5')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                                {{ html()->label('Salario Mes 6')->class('col-md-2 form-control-label font-weight-bold')->for('salario6') }}
    
                                <div class="col-md-3">
                                    {{ html()->text('salario6')
                                        ->class('form-control')
                                        ->value($puesto->salario_puesto)
                                        ->required() }}
                                </div><!--col-->

                                <div class="col-md-3">
                                {{ html()->text('salarioext6')
                                    ->class('form-control') }}
                            </div><!--col-->
    
                            </div><!--form-group-->
                        
                        <div class="form-group row">
                            {{ html()->label('Salario Mes 7')->class('col-md-2 form-control-label font-weight-bold')->for('salario7') }}

                            <div class="col-md-3">
                                {{ html()->text('salario7')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                    {{ html()->text('salarioext7')
                                        ->class('form-control') }}
                                </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 8')->class('col-md-2 form-control-label font-weight-bold')->for('salario8') }}

                            <div class="col-md-3">
                                {{ html()->text('salario8')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext8')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 9')->class('col-md-2 form-control-label font-weight-bold')->for('salario9') }}

                            <div class="col-md-3">
                                {{ html()->text('salario9')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext9')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 10')->class('col-md-2 form-control-label font-weight-bold')->for('salario10') }}

                            <div class="col-md-3">
                                {{ html()->text('salario10')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext10')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 11')->class('col-md-2 form-control-label font-weight-bold')->for('salario11') }}

                            <div class="col-md-3">
                                {{ html()->text('salario11')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext11')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label('Salario Mes 12')->class('col-md-2 form-control-label font-weight-bold')->for('salario12') }}

                            <div class="col-md-3">
                                {{ html()->text('salario12')
                                    ->class('form-control')
                                    ->value($puesto->salario_puesto)
                                    ->required() }}
                            </div><!--col-->

                            <div class="col-md-3">
                                {{ html()->text('salarioext12')
                                    ->class('form-control') }}
                            </div><!--col-->

                        </div><!--form-group-->

                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.personal.index'), __('buttons.general.cancel'),'btn btn-danger btn-lg font-weight-bold') }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create'),'btn btn-success btn-lg font-weight-bold') }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}
@endsection
