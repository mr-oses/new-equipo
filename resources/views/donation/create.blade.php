@extends('layouts.app')

@section('content')
<!-- FORMULARIO CON MONTOS -->
<div class="container pt-3">
    <div class=" flex-column">
        <!-- header -->
        <div class="col text-center">
            <span class="text-uppercase">Más de la mitad de las chicas y chicos
                de la Argentina
                son
                pobres.</span>
            <h3>¡Dona ahora!</h3>
        </div>
        <form id="donacion" action="{{ route('donations.store') }}" method="POST">
            @csrf
            <!-- MONTO A DONAR -->
            <h6 class="my-3"> Sleccioná el monto de tu donación</h6>
            <div class="form-group col-12 col-md-12">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-lg btn-outline-primary">
                    <input type="radio" name="monto" id="option1" value="300"> $300
                    </label>
                    <label class="btn btn-lg btn-outline-primary">
                    <input type="radio" name="monto" id="option2" value="500"> $500
                    </label>
                    <label class="btn btn-lg btn-outline-primary">
                    <input type="radio" name="monto" id="option3" value="1000"> $1000
                    </label>
                    <label class="btn btn-lg btn-outline-primary">
                        <input type="radio" name="monto" id="option3" value="3000"> $3000
                    </label>

                </div>
            </div>
               {{--  <div class="form-group col-12 col-md-12">
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
                        </label>
                </div>
            </div>
            <div class="form-group col-12 col-md-6">
                <div class="form-check">
                    <label class="form-check-label" for="montoDonacion3">
                        <input class="form-check-input" type="radio" name="montoDonacion" id="montoDonacion3" value="500">
                            $500
                        </label>
                </div>
            </div>
            <div class="form-group col-12 col-md-6">
                <div class="form-check">
                    <label class="form-check-label" for="montoDonacion4">
                        <input class="form-check-input" type="radio" name="montoDonacion" id="montoDonacion4" value="300">
                            $300
                        </label>
                </div>
            </div>

            <div class="form-group col-12 col-md-6">
                <div class="form-check">
                    <label class="form-check-label" for="montoDonacion5">
                        <input class="form-check-input" type="radio" name="montoDonacion" id="otroMonto">Otro monto</label>
                        <input type="number" class="form-control" placeholder="Otro monto" name="montoDonacion" id="otroMonto" value="">
                </div>
            </div> --}}

            <!-- FORM FOOTER -->
            <div class="form-row mt-4">
                <div class="col-md-4">
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
    @stop

    @section('scripts')
        <script>
        </script>
    @endsection
