@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')

@section('template_title')
    {{ $laptopDistrito->name ?? "{{ __('Show') Laptop Distrito" }}
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Laptop Distrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('laptop_distrito.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    </section> 
<div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Id: </Strong>{{ $laptopDistrito->id }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Responsable: </strong>{{ $laptopDistrito->Responsable }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Departamento: </Strong>{{ $laptopDistrito->Departamento }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Equipo: </strong>{{ $laptopDistrito->Equipo }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Marca: </Strong>{{ $laptopDistrito->Marca }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Modelo:</strong>{{ $laptopDistrito->Modelo }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Serie Laptop: </Strong> {{ $laptopDistrito->Serie_Laptop }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Procesador:</strong>{{ $laptopDistrito->Procesador }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Tarjeta Madre: </Strong>{{ $laptopDistrito->Tarjeta_Madre }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Memoria Ram: </strong>{{ $laptopDistrito->Memoria_Ram }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Disco Duro: </Strong>{{ $laptopDistrito->Disco_Duro }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Unidad Optica: </strong>{{ $laptopDistrito->Unidad_Optica }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Sistema Operativo:</Strong>{{ $laptopDistrito->Sistema_Operativo }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Ip: </strong>{{ $laptopDistrito->Ip }}</a>
                    </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
