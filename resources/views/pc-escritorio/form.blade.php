<div class="box box-info padding-1">
    <div class="box-body">
    <div class="form-group">
            {{ Form::label('No') }}
            {{ Form::text('No', $pcEscritorio->Responsable, ['class' => 'form-control' . ($errors->has('No') ? ' is-invalid' : ''), 'placeholder' => 'No']) }}
            {!! $errors->first('No', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('Responsable', $pcEscritorio->Responsable, ['class' => 'form-control' . ($errors->has('Responsable') ? ' is-invalid' : ''), 'placeholder' => 'Responsable']) }}
            {!! $errors->first('Responsable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::text('Departamento', $pcEscritorio->Departamento, ['class' => 'form-control' . ($errors->has('Departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('Departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Equipo') }}
            {{ Form::text('Equipo', $pcEscritorio->Equipo, ['class' => 'form-control' . ($errors->has('Equipo') ? ' is-invalid' : ''), 'placeholder' => 'Equipo']) }}
            {!! $errors->first('Equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Marca', $pcEscritorio->Marca, ['class' => 'form-control' . ($errors->has('Marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $pcEscritorio->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie_PC') }}
            {{ Form::text('Serie_PC', $pcEscritorio->Serie_PC, ['class' => 'form-control' . ($errors->has('Serie_PC') ? ' is-invalid' : ''), 'placeholder' => 'Serie Pc']) }}
            {!! $errors->first('Serie_PC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monitor') }}
            {{ Form::text('Monitor', $pcEscritorio->Monitor, ['class' => 'form-control' . ($errors->has('Monitor') ? ' is-invalid' : ''), 'placeholder' => 'Monitor']) }}
            {!! $errors->first('Monitor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie_Monitor') }}
            {{ Form::text('Serie_Monitor', $pcEscritorio->Serie_Monitor, ['class' => 'form-control' . ($errors->has('Serie_Monitor') ? ' is-invalid' : ''), 'placeholder' => 'Serie Monitor']) }}
            {!! $errors->first('Serie_Monitor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Procesador') }}
            {{ Form::text('Procesador', $pcEscritorio->Procesador, ['class' => 'form-control' . ($errors->has('Procesador') ? ' is-invalid' : ''), 'placeholder' => 'Procesador']) }}
            {!! $errors->first('Procesador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tarjeta_Madre') }}
            {{ Form::text('Tarjeta_Madre', $pcEscritorio->Tarjeta_Madre, ['class' => 'form-control' . ($errors->has('Tarjeta_Madre') ? ' is-invalid' : ''), 'placeholder' => 'Tarjeta Madre']) }}
            {!! $errors->first('Tarjeta_Madre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Memoria_Ram') }}
            {{ Form::text('Memoria_Ram', $pcEscritorio->Memoria_Ram, ['class' => 'form-control' . ($errors->has('Memoria_Ram') ? ' is-invalid' : ''), 'placeholder' => 'Memoria Ram']) }}
            {!! $errors->first('Memoria_Ram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Disco_Duro') }}
            {{ Form::text('Disco_Duro', $pcEscritorio->Disco_Duro, ['class' => 'form-control' . ($errors->has('Disco_Duro') ? ' is-invalid' : ''), 'placeholder' => 'Disco Duro']) }}
            {!! $errors->first('Disco_Duro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Unidad_Optica') }}
            {{ Form::text('Unidad_Optica', $pcEscritorio->Unidad_Optica, ['class' => 'form-control' . ($errors->has('Unidad_Optica') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Optica']) }}
            {!! $errors->first('Unidad_Optica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema_Operativo') }}
            {{ Form::text('Sistema_Operativo', $pcEscritorio->Sistema_Operativo, ['class' => 'form-control' . ($errors->has('Sistema_Operativo') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Operativo']) }}
            {!! $errors->first('Sistema_Operativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ip') }}
            {{ Form::text('Ip', $pcEscritorio->Ip, ['class' => 'form-control' . ($errors->has('Ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}
            {!! $errors->first('Ip', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button onclick="miFunc()" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
@section('js')
<script>
  function miFunc() {
    $('.editar').submit(function(e){
        e.preventDefault();
        const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Estas Seguro?',
  text: "De modificar la informacion",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Continuar!',
  cancelButtonText: 'Cancelar!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {

    
    this.submit();
  } 
});
  })
}
</script>
@endsection