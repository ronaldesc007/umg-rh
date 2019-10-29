@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                   
                </div>
                <div class="card-body">                    
                    
                    <img src="{{ asset('img/backend/brand/GestionRH-logo.png') }}" class="img-fluid mx-auto d-block" alt="GestionRH">
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
