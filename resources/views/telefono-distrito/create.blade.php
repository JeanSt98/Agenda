@extends('adminlte::page')


@section('template_title')
    {{ __('Create') }} Telefono Distrito
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agregar Nuevo') }} Telefono Distrito</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('telefono_distritos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('telefono-distrito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
