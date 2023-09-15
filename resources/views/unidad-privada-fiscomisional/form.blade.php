<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('AMIE') }}
            {{ Form::text('AMIE', $unidadPrivadaFiscomisional->AMIE, ['class' => 'form-control' . ($errors->has('AMIE') ? ' is-invalid' : ''), 'placeholder' => 'Amie']) }}
            {!! $errors->first('AMIE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_Institucion') }}
            {{ Form::text('Nombre_Institucion', $unidadPrivadaFiscomisional->Nombre_Institucion, ['class' => 'form-control' . ($errors->has('Nombre_Institucion') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Institucion']) }}
            {!! $errors->first('Nombre_Institucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="Sostenimiento">Sostenimiento</label>
                <select id="Sostenimiento" class="form-control" name="Sostenimiento">
                    $unidadFiscals = array(<option>Fiscomisional</option>,<option>Muncipal</option>,<option>Particular</option>) 
                    @foreach ($unidadPrivadaFiscomisional as $unidadPrivadaFiscomisionals)
                    @endforeach
                </select>
                
            </div>
            <div class="form-group">
                <label for="Nivel_que_oferta">Nivel Que Oferta: </label>
                <select id="Nivel_que_oferta" class="form-control" name="Nivel_que_oferta">
                    $unidadFiscals = array(<option>Inicial</option>,<option>Inicial, Educacion Basica</option>,<option>Inicial, Educacion Basica, Educacion Basica Superior</option>,<option>Inicial, Educacion Basica, Educacion Basica Superior, Bachillerato</option>) 
                    @foreach ($unidadPrivadaFiscomisional as $unidadPrivadaFiscomsionals)
                    @endforeach
                </select>
                
            </div>
        <div class="form-group">
            {{ Form::label('Correo_Institucional') }}
            {{ Form::text('Correo_Institucional', $unidadPrivadaFiscomisional->Correo_Institucional, ['class' => 'form-control' . ($errors->has('Correo_Institucional') ? ' is-invalid' : ''), 'placeholder' => 'Correo Institucional']) }}
            {!! $errors->first('Correo_Institucional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_Institucional_Alterno') }}
            {{ Form::text('Correo_Institucional_Alterno', $unidadPrivadaFiscomisional->Correo_Institucional_Alterno, ['class' => 'form-control' . ($errors->has('Correo_Institucional_Alterno') ? ' is-invalid' : ''), 'placeholder' => 'Correo Institucional Alterno']) }}
            {!! $errors->first('Correo_Institucional_Alterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $unidadPrivadaFiscomisional->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Parroquia') }}
            {{ Form::text('Parroquia', $unidadPrivadaFiscomisional->Parroquia, ['class' => 'form-control' . ($errors->has('Parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
            {!! $errors->first('Parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula_de_la_Autoridad_P') }}
            {{ Form::text('Cedula_de_la_Autoridad_P', $unidadPrivadaFiscomisional->Cedula_de_la_Autoridad_P, ['class' => 'form-control' . ($errors->has('Cedula_de_la_Autoridad_P') ? ' is-invalid' : ''), 'placeholder' => 'Cedula De La Autoridad P']) }}
            {!! $errors->first('Cedula_de_la_Autoridad_P', '<div class="invalid-feedback">Datos Incorrectos</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_de_la_Autoridad_P') }}
            {{ Form::text('Nombre_de_la_Autoridad_P', $unidadPrivadaFiscomisional->Nombre_de_la_Autoridad_P, ['class' => 'form-control' . ($errors->has('Nombre_de_la_Autoridad_P') ? ' is-invalid' : ''), 'placeholder' => 'Nombre De La Autoridad P']) }}
            {!! $errors->first('Nombre_de_la_Autoridad_P', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_de_Nacimiento_A_P') }}
            {{ Form::date('Fecha_de_Nacimiento_A_P', $unidadPrivadaFiscomisional->Fecha_de_Nacimiento_A_P, ['class' => 'form-control' . ($errors->has('Fecha_de_Nacimiento_A_P') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Nacimiento A P']) }}
            {!! $errors->first('Fecha_de_Nacimiento_A_P', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular_A_P') }}
            {{ Form::text('Celular_A_P', $unidadPrivadaFiscomisional->Celular_A_P, ['class' => 'form-control' . ($errors->has('Celular_A_P') ? ' is-invalid' : ''), 'placeholder' => 'Celular A P']) }}
            {!! $errors->first('Celular_A_P', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono_Convencional_A_P') }}
            {{ Form::text('Telefono_Convencional_A_P', $unidadPrivadaFiscomisional->Telefono_Convencional_A_P, ['class' => 'form-control' . ($errors->has('Telefono_Convencional_A_P') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Convencional A P']) }}
            {!! $errors->first('Telefono_Convencional_A_P', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_Personal_Autoridad_P') }}
            {{ Form::text('Correo_Personal_Autoridad_P', $unidadPrivadaFiscomisional->Correo_Personal_Autoridad_P, ['class' => 'form-control' . ($errors->has('Correo_Personal_Autoridad_P') ? ' is-invalid' : ''), 'placeholder' => 'Correo Personal Autoridad P']) }}
            {!! $errors->first('Correo_Personal_Autoridad_P', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion_Domicilio') }}
            {{ Form::text('Direccion_Domicilio', $unidadPrivadaFiscomisional->Direccion_Domicilio, ['class' => 'form-control' . ($errors->has('Direccion_Domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Domicilio']) }}
            {!! $errors->first('Direccion_Domicilio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula_de_la_Autoridad_S') }}
            {{ Form::text('Cedula_de_la_Autoridad_S', $unidadPrivadaFiscomisional->Cedula_de_la_Autoridad_S, ['class' => 'form-control' . ($errors->has('Cedula_de_la_Autoridad_S') ? ' is-invalid' : ''), 'placeholder' => 'Cedula De La Autoridad S']) }}
            {!! $errors->first('Cedula_de_la_Autoridad_S', '<div class="invalid-feedback">Datos Incorrectos</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_de_la_Autoridad_S') }}
            {{ Form::text('Nombre_de_la_Autoridad_S', $unidadPrivadaFiscomisional->Nombre_de_la_Autoridad_S, ['class' => 'form-control' . ($errors->has('Nombre_de_la_Autoridad_S') ? ' is-invalid' : ''), 'placeholder' => 'Nombre De La Autoridad S']) }}
            {!! $errors->first('Nombre_de_la_Autoridad_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_de_Nacimiento_A_S') }}
            {{ Form::date('Fecha_de_Nacimiento_A_S', $unidadPrivadaFiscomisional->Fecha_de_Nacimiento_A_S, ['class' => 'form-control' . ($errors->has('Fecha_de_Nacimiento_A_S') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Nacimiento A S']) }}
            {!! $errors->first('Fecha_de_Nacimiento_A_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular_A_S') }}
            {{ Form::text('Celular_A_S', $unidadPrivadaFiscomisional->Celular_A_S, ['class' => 'form-control' . ($errors->has('Celular_A_S') ? ' is-invalid' : ''), 'placeholder' => 'Celular A S']) }}
            {!! $errors->first('Celular_A_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono_Convencional_A_S') }}
            {{ Form::text('Telefono_Convencional_A_S', $unidadPrivadaFiscomisional->Telefono_Convencional_A_S, ['class' => 'form-control' . ($errors->has('Telefono_Convencional_A_S') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Convencional A S']) }}
            {!! $errors->first('Telefono_Convencional_A_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_Personal_Autoridad_S') }}
            {{ Form::text('Correo_Personal_Autoridad_S', $unidadPrivadaFiscomisional->Correo_Personal_Autoridad_S, ['class' => 'form-control' . ($errors->has('Correo_Personal_Autoridad_S') ? ' is-invalid' : ''), 'placeholder' => 'Correo Personal Autoridad S']) }}
            {!! $errors->first('Correo_Personal_Autoridad_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion_Domicilio_A_S') }}
            {{ Form::text('Direccion_Domicilio_A_S', $unidadPrivadaFiscomisional->Direccion_Domicilio_A_S, ['class' => 'form-control' . ($errors->has('Direccion_Domicilio_A_S') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Domicilio A S']) }}
            {!! $errors->first('Direccion_Domicilio_A_S', '<div class="invalid-feedback">:message</div>') !!}
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