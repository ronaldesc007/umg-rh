@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                   
                </div>
                <div class="card-body">                    
                    @guest
                    <a href="{{route('frontend.auth.login')}}" class="btn btn-warning btn-block mx-auto text-center m-5">@lang('navs.frontend.login')</a>
                    @else
                        @can('view backend')
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-success btn-block mx-auto text-center m-5">Ir a @lang('navs.frontend.user.administration')</a>
                        @endcan
                    @endguest


                    <img src="{{ asset('img/backend/brand/GestionRH-logo.png') }}" class="img-fluid mx-auto d-block" alt="GestionRH">
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
