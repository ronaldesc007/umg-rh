@extends('backend.layouts.app')

@section('title', app_name() . ' | Departamentos')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Departamentos <small class="text-muted">Listado</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.deptos.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Departamento</th>
                            <th>Jefe del Departamento</th>          
                            <th># de Empleados</th>
                            <th># de Puestos Vacantes</th>
                            <th>Fecha Modificación</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deptos as $depto)
                            <tr>
                                <td>{{ $depto->id }}</td>
                                <td>{{ $depto->nombre_depto }}</td>
                                <td>{{ $depto->encargado_depto }}</td>
                                <td>##</td>
                                <td>##</td>
                                <td>{{ $depto->updated_at->diffForHumans() }}</td>
                                <td>@include('backend.deptos.includes.actions', ['depto' => $depto])</td>
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
                    {{ trans_choice('labels.general.total_records', $deptos->total()) }} {!! $deptos->total() !!}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $deptos->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
