<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('No') }}
            {{ Form::text('No', $laptopDistrito->No, ['class' => 'form-control' . ($errors->has('No') ? ' is-invalid' : ''), 'placeholder' => 'No']) }}
            {!! $errors->first('No', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('Responsable', $laptopDistrito->Responsable, ['class' => 'form-control' . ($errors->has('Responsable') ? ' is-invalid' : ''), 'placeholder' => 'Responsable']) }}
            {!! $errors->first('Responsable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::text('Departamento', $laptopDistrito->Departamento, ['class' => 'form-control' . ($errors->has('Departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('Departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Equipo') }}
            {{ Form::text('Equipo', $laptopDistrito->Equipo, ['class' => 'form-control' . ($errors->has('Equipo') ? ' is-invalid' : ''), 'placeholder' => 'Equipo']) }}
            {!! $errors->first('Equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Marca', $laptopDistrito->Marca, ['class' => 'form-control' . ($errors->has('Marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $laptopDistrito->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie_Laptop') }}
            {{ Form::text('Serie_Laptop', $laptopDistrito->Serie_Laptop, ['class' => 'form-control' . ($errors->has('Serie_Laptop') ? ' is-invalid' : ''), 'placeholder' => 'Serie Laptop']) }}
            {!! $errors->first('Serie_Laptop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Procesador') }}
            {{ Form::text('Procesador', $laptopDistrito->Procesador, ['class' => 'form-control' . ($errors->has('Procesador') ? ' is-invalid' : ''), 'placeholder' => 'Procesador']) }}
            {!! $errors->first('Procesador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tarjeta_Madre') }}
            {{ Form::text('Tarjeta_Madre', $laptopDistrito->Tarjeta_Madre, ['class' => 'form-control' . ($errors->has('Tarjeta_Madre') ? ' is-invalid' : ''), 'placeholder' => 'Tarjeta Madre']) }}
            {!! $errors->first('Tarjeta_Madre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Memoria_Ram') }}
            {{ Form::text('Memoria_Ram', $laptopDistrito->Memoria_Ram, ['class' => 'form-control' . ($errors->has('Memoria_Ram') ? ' is-invalid' : ''), 'placeholder' => 'Memoria Ram']) }}
            {!! $errors->first('Memoria_Ram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Disco_Duro') }}
            {{ Form::text('Disco_Duro', $laptopDistrito->Disco_Duro, ['class' => 'form-control' . ($errors->has('Disco_Duro') ? ' is-invalid' : ''), 'placeholder' => 'Disco Duro']) }}
            {!! $errors->first('Disco_Duro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Unidad_Optica') }}
            {{ Form::text('Unidad_Optica', $laptopDistrito->Unidad_Optica, ['class' => 'form-control' . ($errors->has('Unidad_Optica') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Optica']) }}
            {!! $errors->first('Unidad_Optica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema_Operativo') }}
            {{ Form::text('Sistema_Operativo', $laptopDistrito->Sistema_Operativo, ['class' => 'form-control' . ($errors->has('Sistema_Operativo') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Operativo']) }}
            {!! $errors->first('Sistema_Operativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ip') }}
            {{ Form::text('Ip', $laptopDistrito->Ip, ['class' => 'form-control' . ($errors->has('Ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}
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