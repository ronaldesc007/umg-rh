@extends('backend.layouts.app')

@section('title', app_name() . ' | Empleados')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @if(Route::is('admin.candidatos.index'))
                        Candidatos <small class="text-muted">Listado</small>
                    @else
                        Personal <small class="text-muted">Listado</small>
                    @endif
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.empleados.includes.header-buttons')
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
                            <th>Edad</th>
                            <th>Fecha Nacimiento</th>
                            <th>Celular</th>
                            <th>Correo Electrónico</th>
                            <th>Fecha Modificación</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>{{ $empleado->primer_nombre_emp }} {{ $empleado->primer_apellido_emp }}</td>
                                <td>{{ Carbon\Carbon::parse($empleado->fecha_nacimiento_emp)->age }}</td>
                                <td>{{ $empleado->fecha_nacimiento_emp }}</td>
                                <td>{{ $empleado->celular_emp }}</td>
                                <td>{{ $empleado->email_emp }}</td>
                                <td>{{ $empleado->updated_at->diffForHumans() }}</td>
                                <td>@include('backend.empleados.includes.actions', ['empleado' => $empleado])</td>
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
                    {{ trans_choice('labels.general.total_records', $empleados->total()) }} {!! $empleados->total() !!}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $empleados->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
