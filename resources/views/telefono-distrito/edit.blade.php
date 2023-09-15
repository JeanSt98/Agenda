@extends('adminlte::page')


@section('template_title')
    {{ __('Update') }} Telefono Distrito
@endsection

@section('content')
<br>

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Telefono Distrito</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('telefono_distritos.update', $telefonoDistrito->id) }}"  role="form" enctype="multipart/form-data" class="d-inline editar">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('telefono-distrito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
