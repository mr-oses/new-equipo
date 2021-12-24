@extends('layouts.app')
<!-- FORMULARIO CON MONTOS -->
<div class="container">
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
</div>