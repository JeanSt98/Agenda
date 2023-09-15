@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')

@section('template_title')
    {{ __('Update') }} Laptop Distrito
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Laptop Distrito</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('laptop_distrito.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('laptop_distrito.update', $laptopDistrito->id) }}"  role="form" enctype="multipart/form-data" class="d-inline editar">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('laptop-distrito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
