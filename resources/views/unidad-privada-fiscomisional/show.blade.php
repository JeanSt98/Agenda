@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')

@section('template_title')
Unidad Privada Fiscomisional
@endsection

@section('content')
<br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Unidad Privada Fiscomisional</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidad-privada-fiscomisional.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    </section>
                    <div class="row ">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Id:</Strong> {{ $unidadPrivadaFiscomisional->id }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Amie:</Strong> {{ $unidadPrivadaFiscomisional->AMIE }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Nombre Insititucion:</strong>{{ $unidadPrivadaFiscomisional->Nombre_Institucion }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Sostenimiento: </Strong>{{ $unidadPrivadaFiscomisional->Sostenimiento }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Nivel Que Oferta:</strong> {{ $unidadPrivadaFiscomisional->Nivel_que_oferta }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Correo Institucional: </Strong>{{ $unidadPrivadaFiscomisional->Correo_Institucional }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Correo Institucional Alterno: </strong>{{ $unidadPrivadaFiscomisional->Correo_Institucional_Alterno }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Direccion: </Strong>{{ $unidadPrivadaFiscomisional->Direccion }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Parroquia: </strong>{{ $unidadPrivadaFiscomisional->Parroquia }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Cedula De La Autoridad P:</Strong>{{ $unidadPrivadaFiscomisional->Cedula_de_la_Autoridad_P }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Nombre De La Autoridad P: </strong>{{ $unidadPrivadaFiscomisional->Nombre_de_la_Autoridad_P }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Fecha De Nacimiento A P: </Strong>{{ $unidadPrivadaFiscomisional->Fecha_de_Nacimiento_A_P }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Celular A P: </strong>{{ $unidadPrivadaFiscomisional->Celular_A_P }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Telefono Convencional A P: </Strong>{{ $unidadPrivadaFiscomisional->Telefono_Convencional_A_P }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Correo Personal Autoridad P: </strong>{{ $unidadPrivadaFiscomisional->Correo_Personal_Autoridad_P }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Direccion Domicilio: </Strong>{{ $unidadPrivadaFiscomisional->Direccion_Domicilio }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Cedula De La Autoridad S: </strong>{{ $unidadPrivadaFiscomisional->Cedula_de_la_Autoridad_S }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Nombre De La Autoridad S: </Strong>{{ $unidadPrivadaFiscomisional->Nombre_de_la_Autoridad_S }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Fecha De Nacimiento A S: </strong>{{ $unidadPrivadaFiscomisional->Fecha_de_Nacimiento_A_S }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Celular A S: </Strong>{{ $unidadPrivadaFiscomisional->Celular_A_S }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Telefono Convencional A S: </strong>{{ $unidadPrivadaFiscomisional->Telefono_Convencional_A_S }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Correo Personal Autoridad S: </Strong>{{ $unidadPrivadaFiscomisional->Correo_Personal_Autoridad_S }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Direccion Domicilio A S: </strong>{{ $unidadPrivadaFiscomisional->Direccion_Domicilio_A_S }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
