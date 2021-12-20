@extends('layouts.app')

@section('css_custom_files')
    <link href="{{ asset("css/new-equipo.css")}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Index</h1>
            <div id="chartdiv"></div>
        </div>
    </div>
    <div class="row">
        <div class="numero" id="numero">
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
            alert();
            const DATA = {
                donationsXDay: @json($donations),
                totalDonations: @json($totalDonations)
            }
        </script>
        <script src="{{ asset('js/new-equipo.js') }}"></script>
    @endsection
</html>
