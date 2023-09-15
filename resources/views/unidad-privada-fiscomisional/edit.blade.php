@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')

@section('template_title')
    {{ __('Update') }} Unidad Privada Fiscomisional
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Unidad Privada Fiscomisional</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('unidad-privada-fiscomisional.update', $unidadPrivadaFiscomisional->id) }}"  role="form" enctype="multipart/form-data" class="d-inline editar">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('unidad-privada-fiscomisional.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
