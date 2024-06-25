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
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Contraseña</label>  
                  <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su Contraseña" />
                  </div>

    </div>
    <div class="box-footer mt20">
        <button onclick="miFunc()" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
