@extends('layouts.app')
@section('css_custom_files')
<!-- <link rel="stylesheet" href="{{asset('')}}"> -->
@endsection
@section('content')
<!-- TODO Agregar un boton a "Mis Donaciones"? -->
<!-- TODO Agregar una card con el valor y fecha de la última donación? -->
<!-- FORMULARIO CON MONTOS -->

<div class="container pt-5">
    <div class=" flex-column">
        <!-- header -->
        <div class="col text-center">
            <span class="text-uppercase">Más de la mitad de las chicas y chicos Argentina son pobres</span>
            <h3>¡Dona ahora!</h3>
        </div>
        <form id="donacion" action="{{ route('donations.store') }}" method="POST">
            @csrf
            <!-- MONTO A DONAR -->
            <h6 class="my-3"> Seleccioná el monto de tu donación</h6>
            <!-- CONTENEDOR DEL FORM -->
            <div class="form-group row row-cols-1 m-auto">
                <!-- primera fila -->
                <div class="btn-group btn-group-toggle col-md-12 d-flex flex-wrap" data-toggle="buttons">
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option1" value="300" class="montoFijo"> $300
                    </label>
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option2" value="500" class="montoFijo"> $500
                    </label>
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option3" value="1000" class="montoFijo"> $1000
                    </label>
                    <label class="btn btn-lg btn-outline-primary mr-5 mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="option4" value="3000" class="montoFijo"> $3000
                    </label>
                    <label class="btn btn-lg btn-outline-primary mb-3 d-flex align-items-center rounded">
                        <input type="radio" name="monto" id="otroMonto" value="" class="montoCustom"> Otro monto
                    </label>
                </div>
                <!-- segunda fila -->
                <div class="col-md-12 d-flex justify-content-end">
                    <label id="otroMontoDiv" class="btn btn-outline-primary align-items-center rounded mt-3 d-none">
                        <input type="number" class="form-control" placeholder="ARS $" name="monto" id="otroMontoCant" value="">
                    </label>
                </div>
            </div>

            <!-- FORM FOOTER -->
            <div class="form-row mt-4 mb-4">
                <div class="col-md-4 m-auto">
                    <button type="submit" id="botonDonar" class="btn btn-codo btn-block">Doná</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

@endsection

@section('js_custom_files')
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/donations/create.js')}}"></script>
@stop

@section('scripts')
<script>
</script>
@endsection