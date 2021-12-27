@extends('layouts.app')

@section('css_custom_files')
<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="{{ asset('css/donations/index.css') }}" rel="stylesheet">
@endsection

@section('js_custom_files')
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
@stop

@section('content')

<!-- Content -->

<div class="container py-5">
    <!-- Donation container -->
    <!-- Table container -->
    <!-- header -->

    <div class="d-flex flex-column">
        <div class="m-auto d-flex flex-column">
            <h3 class="dark-pink-color text-center"><b>Registro de donaciones</b></h3>
            <p class="text-center">Argentina 2021</p>
        </div>

        <!-- tabla de donaciones -->
        <div class="">
            <table id="tableDonations" class="table table-hover w-100 mb-3">
                <thead class="cyan-card text-white">
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Monto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donations as $donation)
                    <tr>
                        <td>{{ $donation->id }}</td>
                        <td>{{ date('d-m-Y', strtotime($donation->created_at)) }}</td>
                        <td>{{ date('H:i:s', strtotime($donation->created_at)) }}</td>
                        <td>${{ $donation->monto }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('donations.edit', $donation->id) }}" data-id="{{ $donation->id }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Editar Donación"><i class="fa fa-pencil-alt"></i></a>
                                <a data-id="{{ $donation->id }}" class="btn-delete btn btn-sm btn-outline-danger" data-toggle="tooltip" title="Eliminar Donación"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- mis donaciones -->
    <div class="card mb-5 mt-5 blur-shadow">
        <div class="card-body display-column m-auto">
            <h5 class="card-title">¡Gracias! </h5>
            <p class="card-text small-margin-bottom">Cada contribución mejora la calidad de vida de los chicos y chicas que más lo necesitan </p>
            <div class="">
                <span>Este es el monto total de tus donaciones:</span>
                <!-- TODO implementar el numero total de donaciones aca abajo-->
                <span>$</span>
            </div>
            <a href="#" class="btn btn-primary mt-3">Hacer otro aporte</a>
        </div>
    </div>

    <!-- tabla de donaciones -->

</div>
</div>
@endsection

@section('js_custom_files')

@endsection

@section('scripts')
<script>
    //TODO Migrar el código js al archivo index.js
    //TODO Agregar una card con el total de donaciones del usuario?
    $(document).ready(function() {

    });
    /* NOTIFICACIONES */
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    @if(Session::has('success'))
    Toast.fire({
        icon: 'success',
        title: '{{ Session::get('
        success ') }}'
    })
    @elseif(Session::has('error'))
    Toast.fire({
        icon: 'error',
        title: '{{ Session::get('
        error ') }}'
    })
    @endif

    @php
    Session::forget(['success', 'error']);
    @endphp

    /* FIN NOTIFICACIONES */

    /* TABLA DE DONACIONES */
    $('[data-toggle="tooltip"]').tooltip();

    var tableDonations = $('#tableDonations').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "order": [
            [1, "desc"]
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        "columnDefs": [{
                targets: 0,
                orderable: false,
                visible: false
            },
            {
                targets: 1,
                orderable: true,
                width: "200px",
                className: "text-center"
            },
            {
                targets: 2,
                orderable: true,
                width: "200px",
                className: "text-center"
            },
            {
                targets: -2,
                orderable: true,
                width: "70px",
                className: "text-right"
            },
            {
                targets: -1,
                orderable: false,
                width: "70px",
                className: "text-center"
            },
        ],
    });
    /* FIN TABLA DE DONAIONES */

    $(document).on("click", "a.btn-delete", function(event) {
        let id = $(this).data('id');
        let row = $(this).closest('tr');
        Swal.fire({
                title: "Desea eliminar la donación?",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Eliminar',
            })
            .then((confirmacion) => {
                if (confirmacion.value === true) {
                    $.ajax({
                        url: '/donations/' + id + '/destroy',
                        type: 'GET',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(result) {
                            row.remove();
                            Toast.fire({
                                icon: 'success',
                                title: 'La donación se eliminó correctamente'
                            })
                        },
                        error: function(result) {
                            Toast.fire({
                                icon: 'error',
                                title: 'Se produjo un error, intentelo nuevamente más tarde.'
                            })
                        }
                    });
                }
            });
    });
</script>
@endsection