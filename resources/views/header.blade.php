<header class="main-header">
    <div class="logo">
        <h1>
            <a href="{{ url('/') }}" class="logo-link">atpLaravelRecu</a>
        </h1>
    </div>
    <nav class="main-nav">
        <ul>
            <li><a href="{{ route('tenistas.index') }}">Tenistas</a></li>
            <li><a href="{{ route('torneos.index') }}">Torneos</a></li>
            <li><a href="{{ url('/estadisticas') }}">Estadísticas</a></li>
            @guest
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
            @else
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
    </nav>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }

        body {
            line-height: 1.6;
            background-color: black;
            color: #fff;
        }

        .main-header {
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 2px solid #1abc9c;
        }

        .main-header .logo h1 {
            margin: 0;
            font-size: 24px;
        }

        .main-header .logo .logo-link {
            text-decoration: none;
            color: white;
            transition: color 0.3s, transform 0.3s;
        }

        .main-header .logo .logo-link:hover {
            color: #1abc9c;
            transform: scale(1.05);
        }

        .main-nav ul {
            list-style-type: none;
            display: flex;
            align-items: center;
        }

        .main-nav ul li {
            margin-left: 20px;
        }

        .main-nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .main-nav ul li a:hover {
            color: #1abc9c;
        }
    </style>
</header>
