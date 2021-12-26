<nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img id="logo" src="{{ asset('img/logo.png') }}" alt="Logo UNICEF">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#que_hacemos">Qué hacemos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#investigacion_e_informes">Investigación e informes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#historias">Historias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('donations.create') }}">Doná</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-codo nav-link-custom" href="#" data-toggle="modal" data-target="#modalCompra">Contacto</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrate</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nombre }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="{{ route('donations.index') }}">Mis Donaciones</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
