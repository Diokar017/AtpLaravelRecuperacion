<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato de Tenis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .content {
            display: flex;
            justify-content: start;
            align-items: center;
            flex-wrap: wrap;
            padding-left: 20px;
        }

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

        main {
            padding: 20px;
            text-align: center;
        }

        .history-box, .sponsor-box {
            overflow: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
            border-radius: 15px;
        }

        .history-box {
            width: 400px;
            height: 400px;
            z-index: 1;
        }

        .sponsor-box {
            width: 200px;
            height: 200px;
            z-index: 2;
        }

        .history-box a, .sponsor-box a {
            display: block;
            width: 100%;
            height: 100%;
        }

        .history-box img, .sponsor-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            border-radius: 15px;
        }

        .history-box .hover-text {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            text-align: center;
            color: white;
            font-size: 16px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 5px;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .history-box:hover .hover-text {
            opacity: 1;
        }

        .history-box:hover img, .sponsor-box:hover img {
            transform: scale(0.9);
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
@include('header')
<main>
    <h2>Bienvenidos al mejor campeonato de tenis del mundo</h2>
    <p>Explora las secciones para más información.</p>
</main>
<div class="content">
    <div class="history-box">
        <a href="https://es.wikipedia.org/wiki/Asociaci%C3%B3n_de_Tenistas_Profesionales" target="_blank">
            <img src="{{ asset('images/historia_tenis.jpg') }}" alt="Historia del Tenis">
            <span class="hover-text">Conoce nuestra historia</span>
        </a>
    </div>
    <div class="sponsor-box">
        <a href="https://www.rolex.com/" target="_blank">
            <img src="{{ asset('images/rolex_image.jpg') }}" alt="Rolex Official">
            <span class="hover-text">Rolex, patrocinador oficial</span>
        </a>
    </div>
</div>
@include('footer')
</body>
</html>
