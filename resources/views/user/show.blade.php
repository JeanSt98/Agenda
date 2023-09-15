@extends('adminlte::page')

@section('template_title')
    {{ $user->name ?? "{{ __('Show') User" }}
@endsection
@section('content')
<br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    </section>
                    <div class="row row-cols-2">
                    @role('admin')
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Id: </Strong>{{ $user->id }}</a>
                        @endrole
                        <a class="list-group-item list-group-item-action list-group-item-primary"><strong>Nombre:</strong>{{ $user->name }}</a>
                    </div>
                    <div class="row">
                        <a class="list-group-item list-group-item-action list-group-item-primary active"><Strong>Email: </Strong>{{ $user->email }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
