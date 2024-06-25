@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')

@section('template_title')
Impresoras
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Impresoras</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('impresoras.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    </section> 
<div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Id: </Strong>{{ $impresoras->id }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Responsable: </strong>{{ $impresoras->Responsable }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Departamento: </Strong>{{ $impresoras->Departamento }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Equipo: </strong>{{ $impresoras->Equipo }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Marca: </Strong>{{ $impresoras->Marca }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Modelo: </strong>{{ $impresoras->Modelo }}</a>
                    </div>
                    <div class="row row">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Serie Impresora: </Strong>{{ $impresoras->Serie_Impresora }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
