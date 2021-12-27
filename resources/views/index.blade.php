@extends('layouts.app')

@section('css_custom_files')

@stop

@section('content')
<div>
    <!-- Main -->


    <!-- QUÉ HACEMOS -->
    <section id="que_hacemos" class="container-fluid dark-blue-background">
        <div class="row">
            <img src="{{asset('img/02_WWD_UNI174116_Bluewash_WEB_0.jpg')}}" class="img-fluid" alt="Madre e hijo">

            <div class="card_overlap col-md-8">
                <div class="card-body text-center p-5 blockquote">
                    <h2 class="card-title">Qué hacemos</h2>
                    <p class="card-text "> <em> UNICEF trabaja en más de 190 países y territorios para salvar las vidas de los niños. Para defender sus derechos. Para ayudarles a alcanzar su máximo potencial. Y nunca nos rendimos.</em></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ACCIONES -->
    <section id="acciones">
        <!-- ACCIONES HEADER -->
        <div class="card-body p-5 dark-blue-background white-color row  m-auto">
            <p class=" card-text col-md-8 m-auto">
                Los niños, niñas y adolescentes en Argentina enfrentan desafíos para acceder a su derecho a educación, inclusión, salud, protección y participación.
            </p>
            <p class="card-text col-md-8 m-auto">
                El programa de trabajo de UNICEF en Argentina se enfoca en estas cinco áreas temáticas. El objetivo es mejorar el acceso de cada niño, niña y adolescente a derechos, bienestar y oportunidades de desarrollo. Porque el futuro de un niño no debería depender del hogar en el que nace.
            </p>
            <p class="card-text col-md-8 m-auto">
                Conocé el trabajo de UNICEF en las diferentes áreas temáticas:
            </p>
        </div>
        <!-- ACCIONES MAIN -->
        <div class="card-body p-5 text-center">
            <div>
                <h3>Protección de la infancia e inclusión</h3>
                <img src="{{asset('img/icon_protection-intro_2.png')}}" class="img-fluid pt-2" alt="manos unidas">
            </div>
            <div>
                <h4>Seguridad de la infancia a través de la protección y la inclusión</h4>
                <p class="pt-3">UNICEF trabaja para mejorar las políticas y servicios dirigidos a proteger a todos los niños. Aspiramos a lograr que los niños crezcan en un mundo seguro e inclusivo.</p>
            </div>
        </div>


        <div class="card-body p-5 text-center grey-background">
            <div>
                <h3>Género</h3>
                <img src="{{asset('img/icon_gender-intro.png')}}" class="img-fluid pt-2" alt="ícono género inclusivo">
            </div>
            <div>
                <h4>La inclusión es vital para lograr un mundo más justo</h4>
                <p class="pt-3">UNICEF lucha por la igualdad de derechos de las mujeres y las niñas, con el propósito de lograr su participación plena en el desarrollo político, social y economico en todo el mundo</p>
            </div>
        </div>

        <div class="card-body p-5 text-center">
            <div>
                <h3>Educación</h3>
                <img src="{{asset('img/icon_education-intro.png')}}" class="img-fluid pt-2" alt="ícono educación">
            </div>
            <div>
                <h4>La educación es la llave de las oportunidades</h4>
                <p class="pt-3">UNICEF tiene la convicción de que la educación de calidad constituye un derecho de todos los niños, tanto en los países en desarrollo como en las zonas de conflicto</p>
            </div>
        </div>
    </section>

    <!-- INVESTIGACIÓN E INFORMES -->
    <section id="investigacion_e_informes" class="p-5 margin-top-solid">
        <div class="card-body text-center px-5 pt-2 blockquote row flex-column">
            <h2 class="card-title  cyan-card white-color col-md-4 m-auto p-1">Investigación e informes</h2>
            <p class="card-text  pt-4 m-auto"> <em>El trabajo de UNICEF se basa en datos empíricos, una investigación rigurosa y un análisis minucioso.</em></p>
            <p class=" col-md-8 mt-2 mx-auto">UNICEF combina la experiencia, las pruebas y el análisis con el fin de crear campañas, informes y programas en los lugares donde resulten más necesarios. Lee nuestros informes para ver cómo los datos pueden llevar al cambio.</p>

        </div>



        <div class="text-center row my-3">
            <h3 class="col-md-4 mx-auto cyan-color">Publicaciones destacadas</h3>
        </div>
        <div class="card-group">
            <div class="card mr-3">
                <img src="{{asset('img/Kyrgyzstan-bouncer.jpg')}}" class="card-img-top" alt="Niños en un merendero">
                <div class="card-body text-left">
                    <h5 class="card-title">El estado mundial de la infancia 2019</h5>
                    <p class="card-text">¿Qué ves cuando te imaginas a un niño malnutrido? Descubre por qué uno de cada tres niños no está creciendo bien</p>
                    <a href="#" class="card-link">> Leer historia</a>

                </div>
            </div>
            <div class="card mr-3">
                <img src="{{asset('img/UN069359.jpg')}}" class="card-img-top" alt="Niñas estudiando en un colegio">
                <div class="card-body text-left">
                    <h5 class="card-title">Plan estratégico de UNICEF, 2018 -2021</h5>
                    <p class="card-text">Resumen ejecutivo</p>
                    <a href="#" class="card-link">> Ver el informe completo</a>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('img/Indonesia-UN0250142-hero.jpg')}}" class="card-img-top" alt="Niños saludando">
                <div class="card-body text-left">
                    <h5 class="card-title">Acción humanitaria para la infancia 2019</h5>
                    <p class="card-text">Proteger a los niños en crisis contra todas las amenazas a sus vidas, su bienestar y su digndad</p>
                    <a href="#" class="card-link">> Ver el informe completo</a>
                </div>
            </div>
        </div>
        <div class=" d-flex justify-content-center">
            <button type="button" class="btn btn-primary mt-5">Ver informes anteriores</button>
        </div>
</div>

</section>

<!-- HISTORIAS -->
<section id="historias" class="container-fluid grey-background">
    <div class="row">
        <img src="{{asset('img/UN0321665_1.jpg')}} " class="img-fluid" alt="Niños sonriendo">
        <div class="col-md-8 card_overlap">
            <div class="card-body text-center p-5 blockquote">
                <h2 class="card-title">Historias</h2>
                <p class="card-text "> <em> Más allá de los titulares, cada niño tiene su historia </em></p>
            </div>
        </div>
    </div>
    <!-- Card group -->
    <div class="container-fluid">
        <!-- First row -->
        <div class="card-group row my-5">
            <div class="card mb-3  col-md-8 mr-2 h-100">
                <div class=" row g-5 d-flex align-items-left">
                    <div class=" col-md-8 d-flex align-items-center">
                        <img id="historias-img-1" src="{{asset('img/UN0561626 credit.jpg')}}" class="img-fluid" alt="Niño con un dibujo">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">Los dibujos de niños migrantes sobre la selva del Darién</h5>
                            <p class="card-text">UNICEF apoya un espacio infantil donde los niños y niñas migrantes pueden recibir atención psicosocial y psico educativa</p>
                            <a href="#" class="card-link">> Leer la historia</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-4 d-flex justify-content-center">
                <div class="d-flex justify-content-center">
                    <img id="historias-img-2" src="{{asset('img/UN0537538.jpg')}}" class="card-img-top d-flex justify-content-center" alt="Adolescente sonriendo">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Proyecto "La infancia en transformación"</h5>
                    <p class="card-text">¿Cómo ves el mundo de hoy? Preguntamos a varias generaciones y estos son los resultados</p>
                    <a href="#" class="card-link">> Visitar la página</a>
                </div>
            </div>
        </div>

        <!-- Second row -->
        <div class="row row-cols-1 row-cols-md-4 g-4 my-5 d-flex justify-content-around">
            <div class="col mb-3  px-0">
                <div class="card h-100 ">
                    <img src="{{asset('img/20180914_Yemen_PB.jpg')}}" class="card-img-top" alt="Niño en una escuela destruida por una bomba">
                    <div class="card-body">
                        <h5 class="card-title">6 graves violaciones contra los niños en tiempos de guerra</h5>
                        <p class="card-text">Así es como los niños se han convertido en el principal objetivo de los conflictos armados</p>
                    </div>
                    <div class="d-flex align-items-end pl-4 mb-2">
                        <a href="#" class="card-link">> Visitar la página</a>
                    </div>
                </div>
            </div>
            <div class="col mb-3 px-0">
                <div class="card h-100 ">
                    <img src="{{asset('img/precausionescovid.jpg')}}" class="card-img-top" alt="Niño jugando con un trineo en la nieve">
                    <div class="card-body">
                        <h5 class="card-title">El COVID-19 y las variaciones: cómo reducir riesgos</h5>
                        <p class="card-text">Consejos para protegerte a ti y a tu familia</p>
                    </div>
                    <div class="d-flex align-items-end pl-4 mb-2">
                        <a href="#" class="card-link">> Conocé más</a>
                    </div>
                </div>
            </div>
            <div class="col mb-3 px-0">
                <div class="card h-100 ">
                    <img src="{{asset('img/UNI159928.jpg')}}" class="card-img-top" alt="Adolescente mirando a cámara">
                    <div class="card-body">
                        <h5 class="card-title">El matrimonio infantil en el mundo</h5>
                        <p class="card-text">¿Sabías que 650 millones de niñas y mujeres están casadas hoy en día?</p>
                    </div>
                    <div class="d-flex align-items-end pl-4 mb-2">
                        <a href="#" class="card-link">> Visitá la página</a>
                    </div>
                </div>
            </div>
            <div class="col mb-3 px-0">
                <div class="card h-100 ">
                    <img src="{{asset('img/aguayhambre.jpg')}}" class="card-img-top" alt="niños cargando botellas de agua">
                    <div class="card-body">
                        <h5 class="card-title">Agua y hambre: cuatro cosas que necesitas saber</h5>
                        <p class="card-text">Millones de personas corren el riesgo de sufrir hambre en Etiopía, Madagascar, Sudán del sur y Yemen</p>
                    </div>
                    <div class="d-flex align-items-end pl-4 mb-2">
                        <a href="#" class="card-link">> Conocé su historia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ACTUA -->
<section id="actua" class="d-flex justify-content-center mt-3 pt-3">
    <div class="container-fluid row d-flex align-items-center">
        <!-- actua header -->
        <div class="card-body text-center px-5 pt-2 blockquote row d-flex flex-column">
            <h2 class="card-title cyan-color col-md-4 m-auto p-1">Sumate</h2>
            <p class="card-text  pt-4 col-md-8 m-auto"> <em>Los niños necesitan campeones. Participa, alza la voz, hazte voluntario o donante y otorga a cada niño una oportunidad justa para tener éxito.</em></p>
        </div>

        <!-- actua main -->
        <div class="container row row-cols-md-2 m-auto pb-5">
            <!-- gráfico -->
            <div class=" h-100 mb-3 col-md-6 m-auto">
                <div id="chartdiv">
                </div>
            </div>
            <div class="col-md-6 m-auto">
                <div class="card-body">
                    <div class="row row-cols-2">
                        <p class="card-text col-md-6 w-auto fs-6"> <b>Total de donaciones:</b> </p>
                        <div class="numero card-text fs-6" id="numero">${{ number_format($totales['totalDonations'], 2, ',', '.') }}
                        </div>
                    </div>
                    <div class="row row-cols-2 ">
                        <p class="card-text col-md-6 w-auto fs-6"><b> Objetivo del 2022:</b></p>
                        <span class="card-text fs-6">$16.000.000,00</span>
                    </div>
                    <div class="row row-cols-2">
                        <p class="card-text col-md-6 w-auto fs-6"><b> Falta recaudar:</b></p>
                        <span class="card-text fs-6">
                            ${{ number_format(16000000-$totales['totalDonations'], 2, ',', '.') }}
                        </span>
                    </div>
                    <div class="pt-3">
                        <h3 class="card-title">Tu aporte salva vidas</h3>
                        <p class="card-text">Con $50 por día colaborás para incorporar alimentos nutritivos en la vianda de 4 chicas o chicos durante un mes.</p>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="btn w-50">Doná</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
@section('js_custom_files')
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@stop


@section('scripts')
<script>
    $('footer').removeClass('position-md-fixed')
</script>

@endsection

</html>