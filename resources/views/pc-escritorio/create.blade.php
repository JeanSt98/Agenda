@extends('adminlte::page')
@section('title', 'Admin')
@section('plugins.Sweetalert2', true)
@section('content_header')
@section('template_title')
    {{ __('Create') }} Pc Escritorio
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Nueva PC</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pc-escritorio.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pc-escritorio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
