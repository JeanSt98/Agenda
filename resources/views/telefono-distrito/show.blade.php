@extends('adminlte::page')


@section('template_title')
    {{ $telefonoDistrito->name ?? "{{ __('Show') Telefono Distrito" }}
@endsection


@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Telefono Distrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('telefono_distritos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    </section> 
<div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Id: </Strong>{{ $telefonoDistrito->id }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Responsable: </strong>{{ $telefonoDistrito->Responsable }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Departamento: </Strong>{{ $telefonoDistrito->Departamento }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Equipo: </strong>{{ $telefonoDistrito->Equipo }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Marca: </Strong>{{ $telefonoDistrito->Marca }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Modelo: </strong>{{ $telefonoDistrito->Modelo }}</a>
                    </div>
                    <div class="row ">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Serie Telefono: </Strong>{{ $telefonoDistrito->Serie_Telefono }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
