@extends('adminlte::page')
@section('title', '17D06')
@section('plugins.Sweetalert2', true)
@section('content_header')
@section('template_title')
    {{ __('Create') }} Unidad Privada Fiscomisional
@endsection

@section('content')
<br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agregar Nueva') }} Unidad Privada Fiscomisional</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('unidad-privada-fiscomisional.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('unidad-privada-fiscomisional.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
