<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('AMIE') }}
            {{ Form::text('AMIE', $unidadFiscal->AMIE, ['class' => 'form-control' . ($errors->has('AMIE') ? ' is-invalid' : ''), 'placeholder' => 'Amie']) }}
            {!! $errors->first('AMIE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_Institucion') }}
            {{ Form::text('Nombre_Institucion', $unidadFiscal->Nombre_Institucion, ['class' => 'form-control' . ($errors->has('Nombre_Institucion') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Institucion']) }}
            {!! $errors->first('Nombre_Institucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="Sostenimiento">Sostenimiento: </label>
                <select id="Sostenimiento" class="form-control" name="Sostenimiento">
                    $unidadFiscals = array(<option>Fiscal</option>) 
                    @foreach ($unidadFiscal as $unidadFiscals)
                    @endforeach
                </select>
                
            </div>
        <div class="form-group">
            {{ Form::label('Parroquia') }}
            {{ Form::text('Parroquia', $unidadFiscal->Parroquia, ['class' => 'form-control' . ($errors->has('Parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
            {!! $errors->first('Parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $unidadFiscal->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="Distrito">Distrito: </label>
                <select id="Distrito" class="form-control" name="Distrito">
                    $unidadFiscals = array(<option>17D06</option>) 
                    @foreach ($unidadFiscal as $unidadFiscals)
                    @endforeach
                </select>
                
            </div>
        <div class="form-group">
                <label for="Circuito">Circuito: </label>
                <select id="Circuito" class="form-control" name="Circuito">
                    $unidadFiscals = array(<option>17D06C01_10</option>,<option>17D06C02_03</option>,<option>17D06C04</option>,<option>17D06C05_11</option>,<option>17D06C06_07</option>,<option>17D06C08_09</option>) 
                    @foreach ($unidadFiscal as $unidadFiscals)
                    @endforeach
                </select>
                
            </div>
        <div class="form-group">
            {{ Form::label('Nombre_de_la_Autoridad') }}
            {{ Form::text('Nombre_de_la_Autoridad', $unidadFiscal->Nombre_de_la_Autoridad, ['class' => 'form-control' . ($errors->has('Nombre_de_la_Autoridad') ? ' is-invalid' : ''), 'placeholder' => 'Nombre De La Autoridad']) }}
            {!! $errors->first('Nombre_de_la_Autoridad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula_de_la_Autoridad') }}
            {{ Form::text('Cedula_de_la_Autoridad', $unidadFiscal->Cedula_de_la_Autoridad, ['class' => 'form-control' . ($errors->has('Cedula_de_la_Autoridad') ? ' is-invalid' : ''), 'placeholder' => 'Cedula De La Autoridad']) }}
            {!! $errors->first('Cedula_de_la_Autoridad', '<div class="invalid-feedback">Cedula Incorrecta</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('Celular', $unidadFiscal->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('Celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_Institucional') }}
            {{ Form::text('Correo_Institucional', $unidadFiscal->Correo_Institucional, ['class' => 'form-control' . ($errors->has('Correo_Institucional') ? ' is-invalid' : ''), 'placeholder' => 'Correo Institucional']) }}
            {!! $errors->first('Correo_Institucional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono_Rectorado') }}
            {{ Form::text('Telefono_Rectorado', $unidadFiscal->Telefono_Rectorado, ['class' => 'form-control' . ($errors->has('Telefono_Rectorado') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Rectorado']) }}
            {!! $errors->first('Telefono_Rectorado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email_Institucion') }}
            {{ Form::text('Email_Institucion', $unidadFiscal->Email_Institucion, ['class' => 'form-control' . ($errors->has('Email_Institucion') ? ' is-invalid' : ''), 'placeholder' => 'Email Institucion']) }}
            {!! $errors->first('Email_Institucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="Jornada">Jornada: </label>
                <select id="Jornada" class="form-control" name="Jornada">
                    $unidadFiscals = array(<option>Matutina</option>,<option>Matutina, Vespertina, Nocturna</option>,<option>Matutino, Nocturno</option>,<option>Nocturno</option>) 
                    @foreach ($unidadFiscal as $unidadFiscals)
                    @endforeach
                </select>
                
            </div>
        <div class="form-group">
            {{ Form::label('Total_Estudiantes') }}
            {{ Form::text('Total_Estudiantes', $unidadFiscal->Total_Estudiantes, ['class' => 'form-control' . ($errors->has('Total_Estudiantes') ? ' is-invalid' : ''), 'placeholder' => 'Total Estudiantes']) }}
            {!! $errors->first('Total_Estudiantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total_Docentes_Institucion') }}
            {{ Form::text('Total_Docentes_Institucion', $unidadFiscal->Total_Docentes_Institucion, ['class' => 'form-control' . ($errors->has('Total_Docentes_Institucion') ? ' is-invalid' : ''), 'placeholder' => 'Total Docentes Institucion']) }}
            {!! $errors->first('Total_Docentes_Institucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="Nivel_que_oferta">Nivel Que Oferta: </label>
                <select id="Nivel_que_oferta" class="form-control" name="Nivel_que_oferta">
                    $unidadFiscals = array(<option>Inicial</option>,<option>Inicial, Educacion Basica</option>,<option>Inicial, Educacion Basica, Educacion Basica Superior</option>,<option>Inicial, Educacion Basica, Educacion Basica Superior, Bachillerato</option>) 
                    @foreach ($unidadFiscal as $unidadFiscals)
                    @endforeach
                </select>
                
            </div>
        <div class="form-group">
                <label for="Tipo_de_educacion">Tipo de educacion: </label>
                <select id="Tipo_de_educacion" class="form-control" name="Tipo_de_educacion">
                    $unidadFiscals = array(<option>Educacion Ordinaria</option>,<option>Educacion Extraordinaria</option>,<option>Educacion Especial</option>) 
                    @foreach ($unidadFiscal as $unidadFiscals)
                    @endforeach
                </select>
                
            </div>
        <div class="form-group">
            {{ Form::label('Piloto') }}
            {{ Form::text('Jornadas', $unidadFiscal->Jornadas, ['class' => 'form-control' . ($errors->has('Jornadas') ? ' is-invalid' : ''), 'placeholder' => 'Piloto']) }}
            {!! $errors->first('Jornadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Coordenadas_x') }}
            {{ Form::text('Coordenadas_x', $unidadFiscal->Coordenadas_x, ['class' => 'form-control' . ($errors->has('Coordenadas_x') ? ' is-invalid' : ''), 'placeholder' => 'Coordenadas X']) }}
            {!! $errors->first('Coordenadas_x', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Coordenadas_y') }}
            {{ Form::text('Coordenadas_y', $unidadFiscal->Coordenadas_y, ['class' => 'form-control' . ($errors->has('Coordenadas_y') ? ' is-invalid' : ''), 'placeholder' => 'Coordenadas Y']) }}
            {!! $errors->first('Coordenadas_y', '<div class="invalid-feedback">:message</div>') !!}
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