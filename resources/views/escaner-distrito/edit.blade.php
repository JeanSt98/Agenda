@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')
@section('template_title')
    {{ __('Update') }} Escaner Distrito
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Escaner Distrito</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('escaner_distrito.update', $escanerDistrito->id) }}"  role="form" enctype="multipart/form-data" class="d-inline editar">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('escaner-distrito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
