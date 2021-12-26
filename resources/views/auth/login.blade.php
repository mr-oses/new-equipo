@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- SING UP -->
        <div class="row">
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                <section id="log-in-container" class="pt-5 pb-3">
                    <div class="container">
                        <!-- FORM HEADER -->
                        <div class="row">
                            <div class="col text-center">
                                <span class="text-uppercase">Más de la mitad de las chicas y chicos de la Argentina son pobres.</span>
                                <h3 class="mt-2">Tu aporte hace la diferencia</h3>
                                <div class="cyan-color mt-2 ">
                                    <h4 class="display-6">Se parte de la solución</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}" class="mt-2">
                            @csrf
                            <!-- Email -->
                            <div class="form-group row">
                                <div class="form-group col-12 col-md-12">
                                    <label for="email"></label>
                                    <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="form-group col-12 col-md-12">
                                    <label for="password"></label>
                                    <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- log-in button -->
                                <div class="form-row mt-4 mx-auto">
                                    <div class="col">
                                        <button type="submit" class="btn btn-codo btn-block">Iniciar sesión</button>
                                    </div>
                                </div>

                                <!-- Forgot yor password? -->
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                                </a>
                                @endif --}}
                            </div>
                    </div>
            </div>
            <!-- Remember me -->
            {{-- <div class="form-group row d-flex justify-content-start">
                <div class="col-md-6 ">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
</div> --}}



</div>
<!-- /Form -->


</form>
</div>


@endsection