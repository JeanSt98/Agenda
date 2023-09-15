@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Unidad Fiscal
@endsection

@section('content')
<br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Unidad Fiscal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('unidad_fiscal.update', $unidadFiscal->id) }}"  role="form" enctype="multipart/form-data" class="d-inline editar">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('unidad-fiscal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
