@extends('layouts.app')


@section('js_custom_files')
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

@stop

    @section('content')
        <h1>Mis Donaciones</h1>
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
            @if(Session::has('success'))
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get('success') }}'
                })
                /* Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
                }) */
            @elseif(Session::has('error'))
                Toast.fire({
                    type: 'error',
                    title: '{{ Session::get('error') }}'
                })
            @endif
        </script>
    @endsection
