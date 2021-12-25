@extends('layouts.app')


@section('js_custom_files')
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

@stop

@section('content')

<!-- PONER CONTENIDO ACA -->
<div class="continaer fluid row row-cols-2">
    <!-- Donation container -->
    <div id="donation-container col-md-6 p-2">
        <div class=" flex-column">
            <!-- header -->
            <div class="col text-center">
                <span class="text-uppercase">Más de la mitad de las chicas y chicos
                    de la Argentina
                    son
                    pobres.</span>
                <h3>¡Dona ahora!</h3>
            </div>
            <form id="donacion" action="" method="">
                <!-- MONTO A DONAR -->
                <h6 class="my-3"> Sleccioná el monto de tu donación</h6>
                <div class="form-group col-12 col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="montoDonacion" id="montoDonacion1" value="3000">
                        <label class="form-check-label" for="montoDonacion1">
                            $3.000
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label" for="montoDonacion2">
                            <input class="form-check-input" type="radio" name="montoDonacion" id="montoDonacion2" value="1000">
                            $1.000
                    </div>
                </div>
                <div class="form-group col-12 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label" for="montoDonacion3">
                            <input class="form-check-input" type="radio" name="montoDonacion3" id="montoDonacion3" value="500">
                            $500
                    </div>
                </div>
                <div class="form-group col-12 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label" for="montoDonacion4">
                            <input class="form-check-input" type="radio" name="montoDonacion" id="montoDonacion4" value="300">
                            $300
                    </div>
                </div>

                <div class="form-group col-12 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label" for="montoDonacion5">
                            <input class="form-check-input" type="radio" name="montoDonacion" id="montoDonacion5">
                            <input type="number" class="form-control" placeholder="Otro monto" name="montoDonacion" value="">
                    </div>
                </div>

                <!-- FORM FOOTER -->
                <div class="form-row mt-4">
                    <div class="col-md-4">
                        <button type="button" id="botonDonar" class="btn btn-codo btn-block">Doná</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Table container -->
    <div id="table-container">
        <!-- header -->
        <div class="col-md-8 m-auto d-flex flex-column">
            <h3 class="cyan-color text-center"><b>Registro de donaciones</b></h3>
            <p class="text-center">Argentina 2021</p>
        </div>

        <!-- tabla de donaciones -->
        <div class="col-md-8 m-auto d-flex justify-content-center">
            {{-- <table class="table table-hover ">
                <thead>
                    <tr class="row row-cols-3">
                        <th scope="col" class="text-center">Fecha</th>
                        <th scope="col" class="text-center">Monto</th>
                        <th scope="col" class="text-center">Modificaciones</th>
                    </tr>
                </thead>
            </table> --}}
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($donations as $donation)
                        <tr>
                        <th scope="row">{{ date('d-m-Y h:i:s', strtotime($donation->created_at)) }}</th>
                        <td>${{ $donation->monto }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('donations.edit', $donation->id) }}" data-id="{{ $donation->id }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Editar Donación"><i class="fa fa-pencil-alt"></i></a>
                                <a data-id="{{ $donation->id }}" class="btn-delete btn btn-sm btn-outline-danger" data-toggle="tooltip" title="Borrar Donacióncd "><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
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
</script>
@endsection
