@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <!-- SING UP -->
        <div class="row">
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                <section id="sing-up-container" class="pt-5 pb-3">
                    <div class="container">
                        <!-- FORM HEADER -->
                        <div class="row">
                            <div class="col text-center">
                                <span class="text-uppercase">Más de la mitad de las chicas y chicos de la Argentina son pobres</span>
                                <h3 class="mt-2">Tu aporte hace la diferencia</h3>
                                <div class="cyan-color mt-2 ">
                                    <h4 class="display-6">Se parte de la solución</h4>
                                </div>
                            </div>


                        </div>

                        <!-- FORM -->
                        <form novalidate id="donacion" action="{{ route('register') }}" method="POST">
                            @csrf
                            <!-- nombre -->
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="nombre"></label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus placeholder="Nombre">
                                    @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- apellido -->
                                <div class="form-group col-12 col-md-6">
                                    <label for="apellido"></label>
                                    <input id="apellido" type="text" class="form-control  @error('apellido') is-invalid @enderror" placeholder="Apellido" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
                                    @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- dni -->
                                <div class="form-group col-12 col-md-6">
                                    <label for="dni"></label>
                                    <input id="dni" type="number" class="form-control  @error('dni') is-invalid @enderror" placeholder="DNI" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
                                    @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- telefono -->
                                <div class="form-group col-12 col-md-6">
                                    <label for="telefono"></label>
                                    <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" placeholder="telefono" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- email -->
                                <div class="form-group col-12 col-md-12">
                                    <label for="email"></label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo" name="email" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- password -->
                                <div class="form-group col-12 col-md-6">
                                    <label for="password"></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- confirm password -->
                                <div class="form-group col-12 col-md-6">
                                    <label for="password-confirm"></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmá la contraseña">

                                </div>
                                <!-- Register button -->
                                <div class="form-row mt-4 mx-auto">
                                    <div class="col">
                                        <button type="submit" class="btn btn-codo btn-block">Registrate</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
            </div>
        </div>
        </section>
    </div>
</div>
@endsection