@extends('layouts.app')
@section('css_custom_files')

@endsection
@section('content')
<!-- FORMULARIO CON MONTOS -->

<div class="container pt-5">
    <div class=" flex-column">
        <!-- header -->
        <div class="col text-center">
            <span class="text-uppercase">Más de la mitad de las chicas y chicos Argentina son pobres</span>
            <h3>¡Dona ahora!</h3>
        </div>
        <form id="donacion" {{-- action="{{ route('donations.store') }}" --}} method="POST">
            @csrf
            <!-- MONTO A DONAR -->
            <h6 class="my-3"> Seleccioná el monto de tu donación</h6>
            <!-- CONTENEDOR DEL FORM -->
            <div class="form-group row row-cols-1 m-auto">
                <!-- primera fila -->
                <div class="btn-group btn-group-toggle col-md-12 d-flex flex-wrap" data-toggle="buttons">
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option1" value="300" class="montoFijo" data-monto='300'> $300
                    </label>
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option2" value="500" class="montoFijo" data-monto='500'> $500
                    </label>
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option3" value="1000" class="montoFijo" data-monto='1000'> $1000
                    </label>
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option4" value="3000" class="montoFijo" data-monto='3000'> $3000
                    </label>
                    <label class="btn btn-lg btn-outline-primary mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="otroMonto" value="" class="montoCustom"> Otro monto
                    </label>
                </div>
                <!-- segunda fila -->
                <div class="col-md-12 d-flex justify-content-end">
                    <label id="otroMontoDiv" class="btn btn-outline-primary align-items-center rounded mt-3 d-none">
                        <input type="number" class="form-control btn-check" placeholder="ARS $" name="monto" id="otroMontoCant" data-monto='' required>
                    </label>
                </div>
            </div>

            <!-- FORM FOOTER -->
            <div class="form-row mt-4 mb-4">
                <div class="col-md-4 m-auto">
                    <button type="button" id="botonDonar" class="btn btn-codo btn-block">Doná</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js_custom_files')
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @stop

    @section('scripts')
    <script>
        const donationAmout = @json($donation->monto);
        const donationId = @json($donation->id);
        let montoFijo = false;

        $('input[name="monto"]').each(function(){
            if(($(this).data('monto')) === donationAmout){
                $(this).attr('checked', true);
                $(this).closest('label').addClass('active');
                montoFijo = true;
            }
        });

        if(!montoFijo){
            $('#otroMontoCant').val(donationAmout)
            $('#otroMonto').attr('checked', true);
            $("#otroMontoDiv").addClass('d-flex');
            $('#otroMontoCant').attr('disabled', false);
        }

       $(document).on("click","#botonDonar",function(event){
            let btnChecked = $('input[name="monto"]:checked').attr('id');
            let monto = 0;
            console.log(donationId);
            if(btnChecked === 'otroMonto'){
               monto = $('#otroMontoCant').val();
            }else{
                monto = $('input[name="monto"]:checked').val();
            }

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

            Swal.fire({
                title: "Desea modificar la donación?",
                text: '$' + monto,
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Donar',
            })
            .then((confirmacion) => {
                if (confirmacion.value === true) {
                    let data = {
                        monto: monto,
                        _token: '{{ csrf_token() }}',
                    };

                    $.ajax({
                        url: '/donations/' + donationId + 'store',
                        type: 'POST',
                        data: data,
                        success: function(result) {
                            $(location).attr('href', "{{ route('donations.index') }}")
                        },
                        error: function (result) {
                            if(result.responseJSON.errors){
                                Toast.fire({
                                    icon: 'error',
                                    title: result.responseJSON.errors.monto[0]
                                })
                            }
                            else{
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Se produjo un error, intentelo más tarde'
                                })
                            }
                        }
                    });
                }
            });
    });
    </script>
@endsection

