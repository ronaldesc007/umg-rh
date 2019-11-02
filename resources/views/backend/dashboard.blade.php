@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header">
        <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
      </div>
      <!--card-header-->
      <div class="card-body">

        <div class="row">
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-body p-0 d-flex align-items-center">
                <i class="fa fa-sitemap bg-primary p-4 px-5 font-2xl mr-1"></i>
                <div>
                  <a href="{{ route('admin.deptos.index') }}" class="btn stretched-link text-value-sm">Departamentos</a>
                  <div class="text-muted text-uppercase font-weight-bold small"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-body p-0 d-flex align-items-center">
                <i class="fa fa-user-check bg-primary p-4 px-5 font-2xl mr-1"></i>
                <div>
                  <a href="{{ route('admin.puestos.index') }}" class="btn stretched-link text-value-sm">Puestos</a>
                  <div class="text-muted text-uppercase font-weight-bold small"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-body p-0 d-flex align-items-center">
                <i class="fa fa-users bg-primary p-4 px-5 font-2xl mr-1"></i>
                <div>
                  <a href="{{ route('admin.personal.index') }}" class="btn stretched-link text-value-sm">Personal</a>
                  <div class="text-muted text-uppercase font-weight-bold small"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-body p-0 d-flex align-items-center">
                <i class="fa fa-address-card bg-success p-4 px-5 font-2xl mr-1"></i>
                <div>
                  <a href="{{ route('admin.candidatos.index') }}" class="btn stretched-link text-value-sm">Candidatos</a>
                  <div class="text-muted text-uppercase font-weight-bold small"></div>
                </div>
              </div>
            </div>
          </div>
          
        </div>

      </div>
      <!--card-body-->
    </div>
    <!--card-->
  </div>
  <!--col-->
</div>
<!--row-->
@endsection