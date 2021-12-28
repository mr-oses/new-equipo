    /* TABLA DE DONACIONES */
    $('[data-toggle="tooltip"]').tooltip();

    var tableDonations = $('#tableDonations').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
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
                            changeFooterDonations();
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

    function changeFooterDonations() {
        let windowHeight = $(window).height();
        let documentHeight = $(document).height();
        let navHeight = $('#header').height();
        let mainHeight = $('main').height();
        let footerHeight = $('footer').height();

        if ((navHeight + mainHeight + footerHeight) > windowHeight) {
            $('footer').removeClass('position-md-fixed')
        }else{
            $('footer').addClass('position-md-fixed')
        }
    }

    $(document).ready(function(){
        document.addEventListener("resize", changeFooterDonations());
    })
