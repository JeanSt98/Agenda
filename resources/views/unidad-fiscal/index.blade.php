@extends('adminlte::page')

@section('template_title')
    Unidad Fiscal
@endsection
@section ('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
@endsection


@section('content')
<br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unidad Fiscal') }}
                            </span>
                            @role('admin')
                             <div class="float-right">
                                <a href="{{ route('unidad_fiscal.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nuevo Registro') }}
                                </a>
                              </div>
                              @endrole
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="unidad_fiscal">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        
										<th>Amie</th>
										<th>Nombre Institucion</th>
										<!--<th>Sostenimiento</th>-->
										<th>Parroquia</th>
										<th>Direccion</th>
										<!--<th>Distrito</th>
										<th>Circuito</th>-->
										<th>Nombre De La Autoridad</th>
										<!--<th>Cedula De La Autoridad</th>-->
										<th>Celular</th>
										<!--<th>Correo Institucional</th>-->
										<th>Telefono Rectorado</th>
										<!--<th>Email Institucion</th>
										<th>Jornada</th>
										<th>Total Estudiantes</th>
										<th>Total Docentes Institucion</th>
										<th>Nivel Que Oferta</th>
										<th>Tipo De Educacion</th>
										<th>Jornadas</th>
										<th>Coordenadas X</th>
										<th>Coordenadas Y</th>-->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidadFiscals as $unidadFiscal)
                                        <tr>
                                        <td>{{ $unidadFiscal->id }}</td>
                                            
											<td>{{ $unidadFiscal->AMIE }}</td>
											<td>{{ $unidadFiscal->Nombre_Institucion }}</td>
											<!--<td>{{ $unidadFiscal->Sostenimiento }}</td>-->
											<td>{{ $unidadFiscal->Parroquia }}</td>
											<td>{{ $unidadFiscal->Direccion }}</td>
											<!--<td>{{ $unidadFiscal->Distrito }}</td>
											<td>{{ $unidadFiscal->Circuito }}</td>-->
											<td>{{ $unidadFiscal->Nombre_de_la_Autoridad }}</td>
											<!--<td>{{ $unidadFiscal->Cedula_de_la_Autoridad }}</td>-->
											<td>{{ $unidadFiscal->Celular }}</td>
											<!--<td>{{ $unidadFiscal->Correo_Institucional }}</td>-->
											<td>{{ $unidadFiscal->Telefono_Rectorado }}</td>
											<!--<td>{{ $unidadFiscal->Email_Institucion }}</td>
											<td>{{ $unidadFiscal->Jornada }}</td>
											<td>{{ $unidadFiscal->Total_Estudiantes }}</td>
											<td>{{ $unidadFiscal->Total_Docentes_Institucion }}</td>
											<td>{{ $unidadFiscal->Nivel_que_oferta }}</td>
											<td>{{ $unidadFiscal->Tipo_de_educacion }}</td>
											<td>{{ $unidadFiscal->Jornadas }}</td>
											<td>{{ $unidadFiscal->Coordenadas_x }}</td>
											<td>{{ $unidadFiscal->Coordenadas_y }}</td>-->

                                            <td>
                                                <form action="{{ route('unidad_fiscal.destroy',$unidadFiscal->id) }}" method="POST" class="d-inline eliminar">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unidad_fiscal.show',$unidadFiscal->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    @role('admin')<a class="btn btn-sm btn-success" href="{{ route('unidad_fiscal.edit',$unidadFiscal->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>@endrole
                                                    @csrf
                                                    @method('DELETE')
                                                    @role('admin')
                                                    <button onclick="miFunc()" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                </form>
                                                @endrole
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $unidadFiscals->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

<script>
$(document).ready(function() {
    var table = $('#unidad_fiscal').DataTable( {
        lengthChange: true,
        responsive: true,
        autoWidth: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'csv', 'colvis',  ],
        "language": {
            "lengthMenu": "Mostrando "+
            `<select class="custom-select custom-select form-control form-control">
            <option value= '10'>10</option>
            <option value= '25'>25</option>
            <option value= '50'>50</option>
            <option value= '100'>100</option>
            <option value= '-1'>All</option>
            </select>`+ 
            " registros por pagina",
            "zeroRecords": "No se encontraron resultados de la busqueda",
            "info": "Pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No se encontro la informacion solicitada",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": 'Buscar:',
            'paginate':{
                'next': 'Siguiente',
                'previous': 'Anterior'
            }

        }
    } );
 
    table.buttons().container()
        .appendTo( '#unidad_fiscal_wrapper .col-md-6:eq(0)' );
} );
</script>
<script>
  function miFunc() {
    $('.eliminar').submit(function(e){
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
  text: "No podras recuperar este registro depues!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Si, Borralo!',
  cancelButtonText: 'Cancelar!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Eliminado!',
      'Su archivo ha sido eliminado.',
      'success'
    )
    this.submit();
  } 
});
  })
}
</script>
@endsection
