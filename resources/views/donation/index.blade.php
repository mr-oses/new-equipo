@extends('layouts.app')


@section('js_custom_files')
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

@stop

@section('content')

<!-- TABLA -->

<!-- PONER CONTENIDO ACA -->
<div class="continaer fluid row row-cols-2">
    <!-- Donation container -->
    <div id="donation-container col-md-6 p-2">

        <!-- Table container -->
        <div id="table-container">
            <!-- header -->
            <div class="col-md-8 m-auto d-flex flex-column">
                <h3 class="cyan-color text-center"><b>Registro de donaciones</b></h3>
                <p class="text-center">Argentina 2021</p>
            </div>

            <!-- tabla de donaciones -->
            <div class="col-md-8 m-auto d-flex justify-content-center">
                <table class="table table-hover ">
                    <thead>
                        <tr class="row row-cols-3">
                            <th scope="col" class="text-center">Fecha</th>
                            <th scope="col" class="text-center">Monto</th>
                            <th scope="col" class="text-center">Modificaciones</th>
                        </tr>
                    </thead>
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