<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('No') }}
            {{ Form::text('No', $telefonoDistrito->No, ['class' => 'form-control' . ($errors->has('No') ? ' is-invalid' : ''), 'placeholder' => 'No']) }}
            {!! $errors->first('No', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('Responsable', $telefonoDistrito->Responsable, ['class' => 'form-control' . ($errors->has('Responsable') ? ' is-invalid' : ''), 'placeholder' => 'Responsable']) }}
            {!! $errors->first('Responsable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::text('Departamento', $telefonoDistrito->Departamento, ['class' => 'form-control' . ($errors->has('Departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('Departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Equipo') }}
            {{ Form::text('Equipo', $telefonoDistrito->Equipo, ['class' => 'form-control' . ($errors->has('Equipo') ? ' is-invalid' : ''), 'placeholder' => 'Equipo']) }}
            {!! $errors->first('Equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Marca', $telefonoDistrito->Marca, ['class' => 'form-control' . ($errors->has('Marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $telefonoDistrito->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie_Telefono') }}
            {{ Form::text('Serie_Telefono', $telefonoDistrito->Serie_Telefono, ['class' => 'form-control' . ($errors->has('Serie_Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Serie Telefono']) }}
            {!! $errors->first('Serie_Telefono', '<div class="invalid-feedback">:message</div>') !!}
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