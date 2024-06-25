@extends('adminlte::page')

@section('template_title')
Unidad Fiscal
@endsection

@section('content')
<br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Unidad Fiscal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidad_fiscal.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    </section>
                    <div class="row ">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Amie:</Strong>{{ $unidadFiscal->AMIE }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Nombre Institucion:</Strong>{{ $unidadFiscal->Nombre_Institucion }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Sostenimiento:</strong>{{ $unidadFiscal->Sostenimiento }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Parroquia: </Strong>{{ $unidadFiscal->Parroquia }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Distrito:</strong>{{ $unidadFiscal->Distrito }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Circuito: </Strong>{{ $unidadFiscal->Circuito }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Nombre De La Autoridad: </strong>{{ $unidadFiscal->Nombre_de_la_Autoridad }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Cedula De La Autoridad: </Strong>{{ $unidadFiscal->Cedula_de_la_Autoridad }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Celular: </strong>{{ $unidadFiscal->Celular }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Correo Institucional:</Strong><br>{{ $unidadFiscal->Correo_Institucional }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Telefono Rectorado: </strong>{{ $unidadFiscal->Telefono_Rectorado }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Email Institucion: </Strong>{{ $unidadFiscal->Email_Institucion }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Jornada: </strong>{{ $unidadFiscal->Jornada }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Total Estudiantes: </Strong>{{ $unidadFiscal->Total_Estudiantes }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Total Docentes Institucion: </strong>{{ $unidadFiscal->Total_Docentes_Institucion }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Nivel Que Oferta: </Strong>{{ $unidadFiscal->Nivel_que_oferta }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Tipo De Educacion: </strong>{{ $unidadFiscal->Tipo_de_educacion }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Piloto: </Strong>{{ $unidadFiscal->Jornadas }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Coordenadas X: </strong>{{ $unidadFiscal->Coordenadas_x }}</a>
                    </div>
                    <div class="row row-cols-2">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Coordenadas Y: </Strong>{{ $unidadFiscal->Coordenadas_y }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Direccion: </strong>{{ $unidadFiscal->Direccion }}</a>
                    </div>
                </div>
            </div>
        </div>
@endsection

                   