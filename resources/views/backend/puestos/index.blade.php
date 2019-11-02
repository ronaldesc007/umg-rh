@extends('backend.layouts.app')

@section('title', app_name() . ' | Puestos')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Puestos <small class="text-muted">Listado</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.puestos.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Área</th>
                            <th>Departamento</th>
                            <th>Fecha Modificación</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($puestos as $puesto)
                            <tr>
                                <td>{{ $puesto->id }}</td>
                                <td>{{ $puesto->nombre_puesto }}</td>
                                <td>{{ $puesto->codigo_puesto }}</td>
                                <td>{{ $puesto->area_puesto }}</td>
                                <td>{{ $puesto->depto_puesto }}</td>
                                <td>{{ $puesto->updated_at->diffForHumans() }}</td>
                                <td>@include('backend.puestos.includes.actions', ['puesto' => $puesto])</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {{ trans_choice('labels.general.total_records', $puestos->total()) }} {!! $puestos->total() !!}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $puestos->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
