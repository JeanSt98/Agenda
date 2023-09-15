@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')

@section('template_title')
    {{ $escanerDistrito->name ?? "{{ __('Show') Escaner Distrito" }}
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Escaner Distrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('escaner_distrito.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    </section> 
<div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Id: </Strong>{{ $escanerDistrito->id }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Responsable: </strong>{{ $escanerDistrito->Responsable }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Departamento: </Strong>{{ $escanerDistrito->Departamento }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Equipo: </strong>{{ $escanerDistrito->Equipo }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Marca: </Strong>{{ $escanerDistrito->Marca }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Modelo: </strong>{{ $escanerDistrito->Modelo }}</a>
                    </div>
                    <div class="row">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Serie Escaner: </Strong>{{ $escanerDistrito->Serie_Escaner }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
