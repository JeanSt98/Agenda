@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')

@section('template_title')
Pc Escritorio
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Pc Escritorio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pc-escritorio.index') }}"> Volver</a>
                        </div>
                    </div>
                    </section> 
<div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Id: </Strong>{{ $pcEscritorio->id }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Responsable: </strong>{{ $pcEscritorio->Responsable }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Departamento: </Strong>{{ $pcEscritorio->Departamento }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Equipo: </strong>{{ $pcEscritorio->Equipo }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Marca: </Strong>{{ $pcEscritorio->Marca }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Modelo: </strong>{{ $pcEscritorio->Modelo }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Serie Pc: </Strong>{{ $pcEscritorio->Serie_PC }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Monitor: </strong>{{ $pcEscritorio->Monitor }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Serie Monitor: </Strong>{{ $pcEscritorio->Serie_Monitor }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Procesador: </strong>{{ $pcEscritorio->Procesador }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Tarjeta Madre: </Strong>{{ $pcEscritorio->Tarjeta_Madre }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Memoria Ram: </strong>{{ $pcEscritorio->Memoria_Ram }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Disco Duro: </Strong>{{ $pcEscritorio->Disco_Duro }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Unidad Optica: </strong>{{ $pcEscritorio->Unidad_Optica }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Sistema Operativo: </Strong>{{ $pcEscritorio->Sistema_Operativo }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Ip: </strong>{{ $pcEscritorio->Ip }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
