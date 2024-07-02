@extends('adminlte::page')
@section('title', '17D06')
@section('plugins.Sweetalert2', true)
@section('content_header')
@section ('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
@endsection
@section('template_title')
    Unidad Privada Fiscomisional
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
                                {{ __('Unidad Privada Fiscomisional') }}
                            </span>
                            @role('admin')
                             <div class="float-right">
                                <a href="{{ route('unidad-privada-fiscomisional.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nuevo registro') }}
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
                            <table class="table table-striped table-hover" id='unidad_privada'>
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        
										<th>Amie</th>
										<th>Nombre Institucion</th>
										<!--<th>Sostenimiento</th>
										<th>Nivel Que Oferta</th>
										<th>Correo Institucional</th>
										<th>Correo Institucional Alterno</th>-->
										<th>Direccion</th>
										<th>Parroquia</th>
										<!--<th>Cedula De La Autoridad P</th>-->
										<th>Nombre De La Autoridad P</th>
										<!--<th>Fecha De Nacimiento A P</th>-->
										<th>Celular A P</th>
										<th>Telefono Convencional A P</th>
										<!--<th>Correo Personal Autoridad P</th>
										<th>Direccion Domicilio</th>
										<th>Cedula De La Autoridad S</th>
										<th>Nombre De La Autoridad S</th>
										<th>Fecha De Nacimiento A S</th>
										<th>Celular A S</th>
										<th>Telefono Convencional A S</th>
										<th>Correo Personal Autoridad S</th>
										<th>Direccion Domicilio A S</th>-->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidadPrivadaFiscomisionals as $unidadPrivadaFiscomisional)
                                        <tr>
                                            <td>{{ $unidadPrivadaFiscomisional->id }}</td>
                                            
											<td>{{ $unidadPrivadaFiscomisional->AMIE }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Nombre_Institucion }}</td>
											<!--<td>{{ $unidadPrivadaFiscomisional->Sostenimiento }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Nivel_que_oferta }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Correo_Institucional }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Correo_Institucional_Alterno }}</td>-->
											<td>{{ $unidadPrivadaFiscomisional->Direccion }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Parroquia }}</td>
											<!--<td>{{ $unidadPrivadaFiscomisional->Cedula_de_la_Autoridad_P }}</td>-->
											<td>{{ $unidadPrivadaFiscomisional->Nombre_de_la_Autoridad_P }}</td>
											<!--<td>{{ $unidadPrivadaFiscomisional->Fecha_de_Nacimiento_A_P }}</td>-->
											<td>{{ $unidadPrivadaFiscomisional->Celular_A_P }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Telefono_Convencional_A_P }}</td>
											<!--<td>{{ $unidadPrivadaFiscomisional->Correo_Personal_Autoridad_P }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Direccion_Domicilio }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Cedula_de_la_Autoridad_S }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Nombre_de_la_Autoridad_S }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Fecha_de_Nacimiento_A_S }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Celular_A_S }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Telefono_Convencional_A_S }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Correo_Personal_Autoridad_S }}</td>
											<td>{{ $unidadPrivadaFiscomisional->Direccion_Domicilio_A_S }}</td>-->

                                            <td>
                                                <form action="{{ route('unidad-privada-fiscomisional.destroy',$unidadPrivadaFiscomisional->id) }}" method="POST" class="d-inline eliminar">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unidad-privada-fiscomisional.show',$unidadPrivadaFiscomisional->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    @role('admin')<a class="btn btn-sm btn-success" href="{{ route('unidad-privada-fiscomisional.edit',$unidadPrivadaFiscomisional->id) }}"><i class="fa fa-fw fa-edit"></i></a>@endrole
                                                    @csrf
                                                    @method('DELETE')
                                                    @role('admin')
                                                    <button onclick="miFunc()" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
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
                {!! $unidadPrivadaFiscomisionals->links() !!}
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
    var table = $('#unidad_privada').DataTable( {
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
        .appendTo( '#unidad_privada_wrapper .col-md-6:eq(0)' );
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
  text: "No podras recuperar este registro despues!",
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